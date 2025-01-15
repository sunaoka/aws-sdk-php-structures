<?php

namespace Sunaoka\Aws\Structures\FIS\GetExperiment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $resourceType
 * @property list<string>|null $resourceArns
 * @property array<string, string>|null $resourceTags
 * @property list<ExperimentTargetFilter>|null $filters
 * @property string|null $selectionMode
 * @property array<string, string>|null $parameters
 */
class ExperimentTarget extends Shape
{
    /**
     * @param array{
     *     resourceType?: string|null,
     *     resourceArns?: list<string>|null,
     *     resourceTags?: array<string, string>|null,
     *     filters?: list<ExperimentTargetFilter>|null,
     *     selectionMode?: string|null,
     *     parameters?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
