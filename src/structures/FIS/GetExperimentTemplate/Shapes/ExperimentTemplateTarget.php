<?php

namespace Sunaoka\Aws\Structures\FIS\GetExperimentTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $resourceType
 * @property list<string> $resourceArns
 * @property array<string, string> $resourceTags
 * @property list<ExperimentTemplateTargetFilter> $filters
 * @property string $selectionMode
 * @property array<string, string> $parameters
 */
class ExperimentTemplateTarget extends Shape
{
    /**
     * @param array{
     *     resourceType?: string,
     *     resourceArns?: list<string>,
     *     resourceTags?: array<string, string>,
     *     filters?: list<ExperimentTemplateTargetFilter>,
     *     selectionMode?: string,
     *     parameters?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
