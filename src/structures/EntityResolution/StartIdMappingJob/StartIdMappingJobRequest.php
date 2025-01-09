<?php

namespace Sunaoka\Aws\Structures\EntityResolution\StartIdMappingJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\IdMappingJobOutputSource> $outputSourceConfig
 * @property string $workflowName
 */
class StartIdMappingJobRequest extends Request
{
    /**
     * @param array{
     *     outputSourceConfig?: list<Shapes\IdMappingJobOutputSource>,
     *     workflowName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
