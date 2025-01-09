<?php

namespace Sunaoka\Aws\Structures\Schemas\DescribeCodeBinding;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Language
 * @property string $RegistryName
 * @property string $SchemaName
 * @property string $SchemaVersion
 */
class DescribeCodeBindingRequest extends Request
{
    /**
     * @param array{
     *     Language: string,
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
