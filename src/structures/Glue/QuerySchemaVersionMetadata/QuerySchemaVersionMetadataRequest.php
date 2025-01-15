<?php

namespace Sunaoka\Aws\Structures\Glue\QuerySchemaVersionMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\SchemaId|null $SchemaId
 * @property Shapes\SchemaVersionNumber|null $SchemaVersionNumber
 * @property string|null $SchemaVersionId
 * @property list<Shapes\MetadataKeyValuePair>|null $MetadataList
 * @property int<1, 50>|null $MaxResults
 * @property string|null $NextToken
 */
class QuerySchemaVersionMetadataRequest extends Request
{
    /**
     * @param array{
     *     SchemaId?: Shapes\SchemaId|null,
     *     SchemaVersionNumber?: Shapes\SchemaVersionNumber|null,
     *     SchemaVersionId?: string|null,
     *     MetadataList?: list<Shapes\MetadataKeyValuePair>|null,
     *     MaxResults?: int<1, 50>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
