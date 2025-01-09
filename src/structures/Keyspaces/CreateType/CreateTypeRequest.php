<?php

namespace Sunaoka\Aws\Structures\Keyspaces\CreateType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $keyspaceName
 * @property string $typeName
 * @property list<Shapes\FieldDefinition> $fieldDefinitions
 */
class CreateTypeRequest extends Request
{
    /**
     * @param array{
     *     keyspaceName: string,
     *     typeName: string,
     *     fieldDefinitions: list<Shapes\FieldDefinition>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
