<?php

namespace Sunaoka\Aws\Structures\FIS\ListExperiments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $arn
 * @property string|null $experimentTemplateId
 * @property ExperimentState|null $state
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property array<string, string>|null $tags
 * @property ExperimentOptions|null $experimentOptions
 */
class ExperimentSummary extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     arn?: string|null,
     *     experimentTemplateId?: string|null,
     *     state?: ExperimentState|null,
     *     creationTime?: \Aws\Api\DateTimeResult|null,
     *     tags?: array<string, string>|null,
     *     experimentOptions?: ExperimentOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
