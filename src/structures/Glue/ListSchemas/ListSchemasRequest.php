<?php

namespace Sunaoka\Aws\Structures\Glue\ListSchemas;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\RegistryId $RegistryId
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListSchemasRequest extends Request
{
    /**
     * @param array{
     *     RegistryId?: Shapes\RegistryId,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
