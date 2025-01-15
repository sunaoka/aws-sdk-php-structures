<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\GetSystemTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SystemTemplateSummary|null $summary
 * @property DefinitionDocument|null $definition
 * @property int|null $validatedNamespaceVersion
 */
class SystemTemplateDescription extends Shape
{
    /**
     * @param array{
     *     summary?: SystemTemplateSummary|null,
     *     definition?: DefinitionDocument|null,
     *     validatedNamespaceVersion?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
