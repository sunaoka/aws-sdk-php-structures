<?php

namespace Sunaoka\Aws\Structures\DataPipeline\DeactivatePipeline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $pipelineId
 * @property bool|null $cancelActive
 */
class DeactivatePipelineRequest extends Request
{
    /**
     * @param array{
     *     pipelineId: string,
     *     cancelActive?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
