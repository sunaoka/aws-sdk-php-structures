<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AssociationSetDetails> $AssociationSet
 * @property string $OwnerId
 * @property list<PropagatingVgwSetDetails> $PropagatingVgwSet
 * @property string $RouteTableId
 * @property list<RouteSetDetails> $RouteSet
 * @property string $VpcId
 */
class AwsEc2RouteTableDetails extends Shape
{
    /**
     * @param array{
     *     AssociationSet?: list<AssociationSetDetails>,
     *     OwnerId?: string,
     *     PropagatingVgwSet?: list<PropagatingVgwSetDetails>,
     *     RouteTableId?: string,
     *     RouteSet?: list<RouteSetDetails>,
     *     VpcId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
