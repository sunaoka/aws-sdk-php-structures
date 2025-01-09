<?php

namespace Sunaoka\Aws\Structures\Glue\DeleteSchemaVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\SchemaId $SchemaId
 * @property string $Versions
 */
class DeleteSchemaVersionsRequest extends Request
{
    /**
     * @param array{
     *     SchemaId: Shapes\SchemaId,
     *     Versions: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
