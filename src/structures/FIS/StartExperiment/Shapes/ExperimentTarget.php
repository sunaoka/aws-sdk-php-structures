<?php

namespace Sunaoka\Aws\Structures\FIS\StartExperiment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $resourceType
 * @property list<string> $resourceArns
 * @property array<string, string> $resourceTags
 * @property list<ExperimentTargetFilter> $filters
 * @property string $selectionMode
 * @property array<string, string> $parameters
 */
class ExperimentTarget extends Shape
{
    /**
     * @param array{
     *     resourceType?: string,
     *     resourceArns?: list<string>,
     *     resourceTags?: array<string, string>,
     *     filters?: list<ExperimentTargetFilter>,
     *     selectionMode?: string,
     *     parameters?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
