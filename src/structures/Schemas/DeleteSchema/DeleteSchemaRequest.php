<?php

namespace Sunaoka\Aws\Structures\Schemas\DeleteSchema;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RegistryName
 * @property string $SchemaName
 */
class DeleteSchemaRequest extends Request
{
    /**
     * @param array{
     *     RegistryName: string,
     *     SchemaName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
