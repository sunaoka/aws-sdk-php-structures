<?php

namespace Sunaoka\Aws\Structures\FIS\UpdateExperimentTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $resourceType
 * @property list<string>|null $resourceArns
 * @property array<string, string>|null $resourceTags
 * @property list<ExperimentTemplateTargetInputFilter>|null $filters
 * @property string $selectionMode
 * @property array<string, string>|null $parameters
 */
class UpdateExperimentTemplateTargetInput extends Shape
{
    /**
     * @param array{
     *     resourceType: string,
     *     resourceArns?: list<string>|null,
     *     resourceTags?: array<string, string>|null,
     *     filters?: list<ExperimentTemplateTargetInputFilter>|null,
     *     selectionMode: string,
     *     parameters?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
