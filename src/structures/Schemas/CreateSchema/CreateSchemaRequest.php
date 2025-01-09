<?php

namespace Sunaoka\Aws\Structures\Schemas\CreateSchema;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Content
 * @property string $Description
 * @property string $RegistryName
 * @property string $SchemaName
 * @property array<string, string> $Tags
 * @property 'OpenApi3' $Type
 */
class CreateSchemaRequest extends Request
{
    /**
     * @param array{
     *     Content: string,
     *     Description?: string,
     *     RegistryName: string,
     *     SchemaName: string,
     *     Tags?: array<string, string>,
     *     Type: 'OpenApi3'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
