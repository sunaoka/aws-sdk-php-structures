<?php

namespace Sunaoka\Aws\Structures\Glue\CreateSchema;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\RegistryId|null $RegistryId
 * @property string $SchemaName
 * @property 'AVRO'|'JSON'|'PROTOBUF' $DataFormat
 * @property 'NONE'|'DISABLED'|'BACKWARD'|'BACKWARD_ALL'|'FORWARD'|'FORWARD_ALL'|'FULL'|'FULL_ALL'|null $Compatibility
 * @property string|null $Description
 * @property array<string, string>|null $Tags
 * @property string|null $SchemaDefinition
 */
class CreateSchemaRequest extends Request
{
    /**
     * @param array{
     *     RegistryId?: Shapes\RegistryId|null,
     *     SchemaName: string,
     *     DataFormat: 'AVRO'|'JSON'|'PROTOBUF',
     *     Compatibility?: 'NONE'|'DISABLED'|'BACKWARD'|'BACKWARD_ALL'|'FORWARD'|'FORWARD_ALL'|'FULL'|'FULL_ALL'|null,
     *     Description?: string|null,
     *     Tags?: array<string, string>|null,
     *     SchemaDefinition?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
