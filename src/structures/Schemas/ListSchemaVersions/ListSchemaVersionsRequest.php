<?php

namespace Sunaoka\Aws\Structures\Schemas\ListSchemaVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int|null $Limit
 * @property string|null $NextToken
 * @property string $RegistryName
 * @property string $SchemaName
 */
class ListSchemaVersionsRequest extends Request
{
    /**
     * @param array{
     *     Limit?: int|null,
     *     NextToken?: string|null,
     *     RegistryName: string,
     *     SchemaName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
