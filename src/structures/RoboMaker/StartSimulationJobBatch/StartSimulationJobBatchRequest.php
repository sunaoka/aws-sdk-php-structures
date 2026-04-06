<?php

namespace Sunaoka\Aws\Structures\RoboMaker\StartSimulationJobBatch;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientRequestToken
 * @property Shapes\BatchPolicy|null $batchPolicy
 * @property list<Shapes\SimulationJobRequest> $createSimulationJobRequests
 * @property array<string, string>|null $tags
 */
class StartSimulationJobBatchRequest extends Request
{
    /**
     * @param array{
     *     clientRequestToken?: string|null,
     *     batchPolicy?: Shapes\BatchPolicy|null,
     *     createSimulationJobRequests: list<Shapes\SimulationJobRequest>,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
