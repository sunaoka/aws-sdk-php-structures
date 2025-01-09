<?php

namespace Sunaoka\Aws\Structures\Glue\GetSchemaVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\SchemaId $SchemaId
 * @property string $SchemaVersionId
 * @property Shapes\SchemaVersionNumber $SchemaVersionNumber
 */
class GetSchemaVersionRequest extends Request
{
    /**
     * @param array{
     *     SchemaId?: Shapes\SchemaId,
     *     SchemaVersionId?: string,
     *     SchemaVersionNumber?: Shapes\SchemaVersionNumber
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
