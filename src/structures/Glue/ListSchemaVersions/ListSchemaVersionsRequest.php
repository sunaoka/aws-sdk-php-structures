<?php

namespace Sunaoka\Aws\Structures\Glue\ListSchemaVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\SchemaId $SchemaId
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListSchemaVersionsRequest extends Request
{
    /**
     * @param array{
     *     SchemaId: Shapes\SchemaId,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
