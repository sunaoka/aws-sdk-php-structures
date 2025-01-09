<?php

namespace Sunaoka\Aws\Structures\FIS\UpdateExperimentTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $resourceType
 * @property list<string> $resourceArns
 * @property array<string, string> $resourceTags
 * @property list<ExperimentTemplateTargetInputFilter> $filters
 * @property string $selectionMode
 * @property array<string, string> $parameters
 */
class UpdateExperimentTemplateTargetInput extends Shape
{
    /**
     * @param array{
     *     resourceType: string,
     *     resourceArns?: list<string>,
     *     resourceTags?: array<string, string>,
     *     filters?: list<ExperimentTemplateTargetInputFilter>,
     *     selectionMode: string,
     *     parameters?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
