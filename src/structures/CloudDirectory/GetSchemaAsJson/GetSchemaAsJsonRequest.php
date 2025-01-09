<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\GetSchemaAsJson;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SchemaArn
 */
class GetSchemaAsJsonRequest extends Request
{
    /**
     * @param array{SchemaArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
