<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\ListProxies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Arn
 */
class ProxyMetadata extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Arn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
