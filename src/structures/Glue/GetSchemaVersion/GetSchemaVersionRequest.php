<?php

namespace Sunaoka\Aws\Structures\Glue\GetSchemaVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\SchemaId|null $SchemaId
 * @property string|null $SchemaVersionId
 * @property Shapes\SchemaVersionNumber|null $SchemaVersionNumber
 */
class GetSchemaVersionRequest extends Request
{
    /**
     * @param array{
     *     SchemaId?: Shapes\SchemaId|null,
     *     SchemaVersionId?: string|null,
     *     SchemaVersionNumber?: Shapes\SchemaVersionNumber|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
