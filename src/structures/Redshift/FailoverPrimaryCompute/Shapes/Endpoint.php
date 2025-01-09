<?php

namespace Sunaoka\Aws\Structures\Redshift\FailoverPrimaryCompute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Address
 * @property int $Port
 * @property list<VpcEndpoint> $VpcEndpoints
 */
class Endpoint extends Shape
{
    /**
     * @param array{
     *     Address?: string,
     *     Port?: int,
     *     VpcEndpoints?: list<VpcEndpoint>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
