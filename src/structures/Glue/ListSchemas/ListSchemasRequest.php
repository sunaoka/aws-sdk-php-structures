<?php

namespace Sunaoka\Aws\Structures\Glue\ListSchemas;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\RegistryId $RegistryId
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 */
class ListSchemasRequest extends Request
{
    /**
     * @param array{
     *     RegistryId?: Shapes\RegistryId,
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
