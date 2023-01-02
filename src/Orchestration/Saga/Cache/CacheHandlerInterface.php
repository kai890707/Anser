<?php

namespace SDPMlab\Anser\Orchestration\Saga\Cache;

use SDPMlab\Anser\Orchestration\OrchestratorInterface;

interface CacheHandlerInterface
{
    /**
     * Initialize the orchestrator status into the cache.
     *
     * @param string $orchestratorNumber
     * @param string $serializedOrchestrator
     * @return CacheHandlerInterface
     */
    public function initOrchestrator(string $orchestratorNumber, string $serializedOrchestrator): CacheHandlerInterface;

    /**
     * Set the orchestor status after each step has finished.
     *
     * @param string $orchestratorNumber
     * @param string $orchestratorStatus
     * @return CacheHandlerInterface
     */
    public function setOrchestratorStatus(string $orchestratorNumber, string $orchestratorStatus): CacheHandlerInterface;

    /**
     * Get the orchestor status by usint orchestratorNumber.
     *
     * @param string $orchestratorNumber
     * @return string
     */
    public function getOrchestratorStatus(string $orchestratorNumber): string;

    /**
     * Serialize the meta data of orchestrator,
     * and get the serialized orchestratorNumber
     *
     * @param OrchestratorInterface $orchestrator
     * @return string
     */
    public function serializeOrchestrator(OrchestratorInterface $orchestrator): string;

    /**
     * Using the serialized orchestratorNumber to unserialize,
     * and get the original orchestrator data.
     *
     * @param string $orchestratorNumber
     * @return OrchestratorInterface
     */
    public function unserializeOrchestrator(string $orchestratorNumber): OrchestratorInterface;
}
