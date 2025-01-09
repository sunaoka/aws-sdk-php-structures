<?php

namespace Sunaoka\Aws\Structures\Schemas\ListSchemas;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $Limit
 * @property string $NextToken
 * @property string $RegistryName
 * @property string $SchemaNamePrefix
 */
class ListSchemasRequest extends Request
{
    /**
     * @param array{
     *     Limit?: int,
     *     NextToken?: string,
     *     RegistryName: string,
     *     SchemaNamePrefix?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
