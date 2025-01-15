<?php

namespace Sunaoka\Aws\Structures\Redshift\ModifyClusterIamRoles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Address
 * @property int|null $Port
 * @property list<VpcEndpoint>|null $VpcEndpoints
 */
class Endpoint extends Shape
{
    /**
     * @param array{
     *     Address?: string|null,
     *     Port?: int|null,
     *     VpcEndpoints?: list<VpcEndpoint>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
