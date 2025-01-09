<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\CreateSystemTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DefinitionDocument $definition
 * @property int $compatibleNamespaceVersion
 */
class CreateSystemTemplateRequest extends Request
{
    /**
     * @param array{
     *     definition: Shapes\DefinitionDocument,
     *     compatibleNamespaceVersion?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
