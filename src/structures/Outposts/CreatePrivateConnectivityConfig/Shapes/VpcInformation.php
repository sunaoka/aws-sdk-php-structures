<?php

namespace Sunaoka\Aws\Structures\Outposts\CreatePrivateConnectivityConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VpcId
 * @property list<string>|null $SubnetIds
 * @property string|null $VpcEndpointId
 */
class VpcInformation extends Shape
{
    /**
     * @param array{
     *     VpcId?: string|null,
     *     SubnetIds?: list<string>|null,
     *     VpcEndpointId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
