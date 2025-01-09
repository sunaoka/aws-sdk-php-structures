<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\DeleteSchema;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SchemaArn
 */
class DeleteSchemaRequest extends Request
{
    /**
     * @param array{SchemaArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
