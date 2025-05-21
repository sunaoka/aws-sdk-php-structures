<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\GetSchemaVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'capability'|'definition' $Type
 * @property string $SchemaVersionedId
 * @property 'AWS'|'ZCL'|'CONNECTOR'|null $Format
 */
class GetSchemaVersionRequest extends Request
{
    /**
     * @param array{
     *     Type: 'capability'|'definition',
     *     SchemaVersionedId: string,
     *     Format?: 'AWS'|'ZCL'|'CONNECTOR'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
