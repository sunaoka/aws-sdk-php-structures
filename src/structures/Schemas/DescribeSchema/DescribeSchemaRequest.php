<?php

namespace Sunaoka\Aws\Structures\Schemas\DescribeSchema;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RegistryName
 * @property string $SchemaName
 * @property string|null $SchemaVersion
 */
class DescribeSchemaRequest extends Request
{
    /**
     * @param array{
     *     RegistryName: string,
     *     SchemaName: string,
     *     SchemaVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
