<?php

namespace Sunaoka\Aws\Structures\Schemas\ListSchemaVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $Limit
 * @property string $NextToken
 * @property string $RegistryName
 * @property string $SchemaName
 */
class ListSchemaVersionsRequest extends Request
{
    /**
     * @param array{
     *     Limit?: int,
     *     NextToken?: string,
     *     RegistryName: string,
     *     SchemaName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
