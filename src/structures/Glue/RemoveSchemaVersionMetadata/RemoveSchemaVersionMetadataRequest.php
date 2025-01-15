<?php

namespace Sunaoka\Aws\Structures\Glue\RemoveSchemaVersionMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\SchemaId|null $SchemaId
 * @property Shapes\SchemaVersionNumber|null $SchemaVersionNumber
 * @property string|null $SchemaVersionId
 * @property Shapes\MetadataKeyValuePair $MetadataKeyValue
 */
class RemoveSchemaVersionMetadataRequest extends Request
{
    /**
     * @param array{
     *     SchemaId?: Shapes\SchemaId|null,
     *     SchemaVersionNumber?: Shapes\SchemaVersionNumber|null,
     *     SchemaVersionId?: string|null,
     *     MetadataKeyValue: Shapes\MetadataKeyValuePair
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
