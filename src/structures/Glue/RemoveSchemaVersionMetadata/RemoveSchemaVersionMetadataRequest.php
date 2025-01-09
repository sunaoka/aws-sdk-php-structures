<?php

namespace Sunaoka\Aws\Structures\Glue\RemoveSchemaVersionMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\SchemaId $SchemaId
 * @property Shapes\SchemaVersionNumber $SchemaVersionNumber
 * @property string $SchemaVersionId
 * @property Shapes\MetadataKeyValuePair $MetadataKeyValue
 */
class RemoveSchemaVersionMetadataRequest extends Request
{
    /**
     * @param array{
     *     SchemaId?: Shapes\SchemaId,
     *     SchemaVersionNumber?: Shapes\SchemaVersionNumber,
     *     SchemaVersionId?: string,
     *     MetadataKeyValue: Shapes\MetadataKeyValuePair
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
