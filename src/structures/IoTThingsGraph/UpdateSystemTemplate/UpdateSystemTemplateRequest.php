<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\UpdateSystemTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property Shapes\DefinitionDocument $definition
 * @property int|null $compatibleNamespaceVersion
 */
class UpdateSystemTemplateRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     definition: Shapes\DefinitionDocument,
     *     compatibleNamespaceVersion?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
