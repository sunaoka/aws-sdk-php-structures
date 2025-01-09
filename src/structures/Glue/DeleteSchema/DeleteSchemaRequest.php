<?php

namespace Sunaoka\Aws\Structures\Glue\DeleteSchema;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\SchemaId $SchemaId
 */
class DeleteSchemaRequest extends Request
{
    /**
     * @param array{SchemaId: Shapes\SchemaId} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
