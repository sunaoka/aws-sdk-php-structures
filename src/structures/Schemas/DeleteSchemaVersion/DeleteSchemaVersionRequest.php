<?php

namespace Sunaoka\Aws\Structures\Schemas\DeleteSchemaVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RegistryName
 * @property string $SchemaName
 * @property string $SchemaVersion
 */
class DeleteSchemaVersionRequest extends Request
{
    /**
     * @param array{
     *     RegistryName: string,
     *     SchemaName: string,
     *     SchemaVersion: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
