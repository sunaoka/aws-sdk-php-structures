<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\GetSystemTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SystemTemplateSummary $summary
 * @property DefinitionDocument $definition
 * @property int $validatedNamespaceVersion
 */
class SystemTemplateDescription extends Shape
{
    /**
     * @param array{
     *     summary?: SystemTemplateSummary,
     *     definition?: DefinitionDocument,
     *     validatedNamespaceVersion?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
