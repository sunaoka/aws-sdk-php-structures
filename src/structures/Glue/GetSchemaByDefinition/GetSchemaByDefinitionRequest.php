<?php

namespace Sunaoka\Aws\Structures\Glue\GetSchemaByDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\SchemaId $SchemaId
 * @property string $SchemaDefinition
 */
class GetSchemaByDefinitionRequest extends Request
{
    /**
     * @param array{
     *     SchemaId: Shapes\SchemaId,
     *     SchemaDefinition: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
