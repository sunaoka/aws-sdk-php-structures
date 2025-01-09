<?php

namespace Sunaoka\Aws\Structures\Glue\ListSchemaVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\SchemaId $SchemaId
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 */
class ListSchemaVersionsRequest extends Request
{
    /**
     * @param array{
     *     SchemaId: Shapes\SchemaId,
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
