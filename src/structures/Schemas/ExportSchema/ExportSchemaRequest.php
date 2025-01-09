<?php

namespace Sunaoka\Aws\Structures\Schemas\ExportSchema;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RegistryName
 * @property string $SchemaName
 * @property string $SchemaVersion
 * @property string $Type
 */
class ExportSchemaRequest extends Request
{
    /**
     * @param array{
     *     RegistryName: string,
     *     SchemaName: string,
     *     SchemaVersion?: string,
     *     Type: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
