<?php

namespace Sunaoka\Aws\Structures\Glue\ListSchemas;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\RegistryId|null $RegistryId
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListSchemasRequest extends Request
{
    /**
     * @param array{
     *     RegistryId?: Shapes\RegistryId|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
