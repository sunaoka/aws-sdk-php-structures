<?php

namespace Sunaoka\Aws\Structures\RoboMaker\StartSimulationJobBatch;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientRequestToken
 * @property Shapes\BatchPolicy $batchPolicy
 * @property list<Shapes\SimulationJobRequest> $createSimulationJobRequests
 * @property array<string, string> $tags
 */
class StartSimulationJobBatchRequest extends Request
{
    /**
     * @param array{
     *     clientRequestToken?: string,
     *     batchPolicy?: Shapes\BatchPolicy,
     *     createSimulationJobRequests: list<Shapes\SimulationJobRequest>,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
