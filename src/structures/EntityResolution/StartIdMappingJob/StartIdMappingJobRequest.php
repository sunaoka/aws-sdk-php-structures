<?php

namespace Sunaoka\Aws\Structures\EntityResolution\StartIdMappingJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workflowName
 * @property list<Shapes\IdMappingJobOutputSource>|null $outputSourceConfig
 */
class StartIdMappingJobRequest extends Request
{
    /**
     * @param array{
     *     workflowName: string,
     *     outputSourceConfig?: list<Shapes\IdMappingJobOutputSource>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
