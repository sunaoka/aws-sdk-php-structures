<?php

namespace Sunaoka\Aws\Structures\Glue\CheckSchemaVersionValidity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'AVRO'|'JSON'|'PROTOBUF' $DataFormat
 * @property string $SchemaDefinition
 */
class CheckSchemaVersionValidityRequest extends Request
{
    /**
     * @param array{
     *     DataFormat: 'AVRO'|'JSON'|'PROTOBUF',
     *     SchemaDefinition: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
