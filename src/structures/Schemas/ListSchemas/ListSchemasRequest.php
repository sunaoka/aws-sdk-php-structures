<?php

namespace Sunaoka\Aws\Structures\Schemas\ListSchemas;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int|null $Limit
 * @property string|null $NextToken
 * @property string $RegistryName
 * @property string|null $SchemaNamePrefix
 */
class ListSchemasRequest extends Request
{
    /**
     * @param array{
     *     Limit?: int|null,
     *     NextToken?: string|null,
     *     RegistryName: string,
     *     SchemaNamePrefix?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
