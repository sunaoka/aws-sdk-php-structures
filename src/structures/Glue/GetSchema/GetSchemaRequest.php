<?php

namespace Sunaoka\Aws\Structures\Glue\GetSchema;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\SchemaId $SchemaId
 */
class GetSchemaRequest extends Request
{
    /**
     * @param array{SchemaId: Shapes\SchemaId} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
