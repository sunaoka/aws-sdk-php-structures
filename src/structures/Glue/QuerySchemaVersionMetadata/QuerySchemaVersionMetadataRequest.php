<?php

namespace Sunaoka\Aws\Structures\Glue\QuerySchemaVersionMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\SchemaId $SchemaId
 * @property Shapes\SchemaVersionNumber $SchemaVersionNumber
 * @property string $SchemaVersionId
 * @property list<Shapes\MetadataKeyValuePair> $MetadataList
 * @property int<1, 50> $MaxResults
 * @property string $NextToken
 */
class QuerySchemaVersionMetadataRequest extends Request
{
    /**
     * @param array{
     *     SchemaId?: Shapes\SchemaId,
     *     SchemaVersionNumber?: Shapes\SchemaVersionNumber,
     *     SchemaVersionId?: string,
     *     MetadataList?: list<Shapes\MetadataKeyValuePair>,
     *     MaxResults?: int<1, 50>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
