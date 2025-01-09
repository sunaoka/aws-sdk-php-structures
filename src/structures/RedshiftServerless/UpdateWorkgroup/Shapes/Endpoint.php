<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\UpdateWorkgroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $address
 * @property int $port
 * @property list<VpcEndpoint> $vpcEndpoints
 */
class Endpoint extends Shape
{
    /**
     * @param array{
     *     address?: string,
     *     port?: int,
     *     vpcEndpoints?: list<VpcEndpoint>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
