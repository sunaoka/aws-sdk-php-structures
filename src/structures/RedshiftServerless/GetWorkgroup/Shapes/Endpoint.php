<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\GetWorkgroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $address
 * @property int|null $port
 * @property list<VpcEndpoint>|null $vpcEndpoints
 */
class Endpoint extends Shape
{
    /**
     * @param array{
     *     address?: string|null,
     *     port?: int|null,
     *     vpcEndpoints?: list<VpcEndpoint>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
