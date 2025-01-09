<?php

namespace Sunaoka\Aws\Structures\Schemas\DescribeRegistry;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RegistryName
 */
class DescribeRegistryRequest extends Request
{
    /**
     * @param array{RegistryName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
