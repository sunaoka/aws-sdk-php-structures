<?php

namespace Sunaoka\Aws\Structures\Schemas\DescribeSchema;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RegistryName
 * @property string $SchemaName
 * @property string $SchemaVersion
 */
class DescribeSchemaRequest extends Request
{
    /**
     * @param array{
     *     RegistryName: string,
     *     SchemaName: string,
     *     SchemaVersion?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
