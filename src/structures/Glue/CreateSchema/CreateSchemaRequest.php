<?php

namespace Sunaoka\Aws\Structures\Glue\CreateSchema;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\RegistryId $RegistryId
 * @property string $SchemaName
 * @property 'AVRO'|'JSON'|'PROTOBUF' $DataFormat
 * @property 'NONE'|'DISABLED'|'BACKWARD'|'BACKWARD_ALL'|'FORWARD'|'FORWARD_ALL'|'FULL'|'FULL_ALL' $Compatibility
 * @property string $Description
 * @property array<string, string> $Tags
 * @property string $SchemaDefinition
 */
class CreateSchemaRequest extends Request
{
    /**
     * @param array{
     *     RegistryId?: Shapes\RegistryId,
     *     SchemaName: string,
     *     DataFormat: 'AVRO'|'JSON'|'PROTOBUF',
     *     Compatibility?: 'NONE'|'DISABLED'|'BACKWARD'|'BACKWARD_ALL'|'FORWARD'|'FORWARD_ALL'|'FULL'|'FULL_ALL',
     *     Description?: string,
     *     Tags?: array<string, string>,
     *     SchemaDefinition?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
