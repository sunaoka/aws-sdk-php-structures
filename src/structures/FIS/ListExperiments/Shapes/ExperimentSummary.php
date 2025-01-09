<?php

namespace Sunaoka\Aws\Structures\FIS\ListExperiments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $arn
 * @property string $experimentTemplateId
 * @property ExperimentState $state
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property array<string, string> $tags
 * @property ExperimentOptions $experimentOptions
 */
class ExperimentSummary extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     arn?: string,
     *     experimentTemplateId?: string,
     *     state?: ExperimentState,
     *     creationTime?: \Aws\Api\DateTimeResult,
     *     tags?: array<string, string>,
     *     experimentOptions?: ExperimentOptions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
