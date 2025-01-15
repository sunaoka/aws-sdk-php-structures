<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AssociationSetDetails>|null $AssociationSet
 * @property string|null $OwnerId
 * @property list<PropagatingVgwSetDetails>|null $PropagatingVgwSet
 * @property string|null $RouteTableId
 * @property list<RouteSetDetails>|null $RouteSet
 * @property string|null $VpcId
 */
class AwsEc2RouteTableDetails extends Shape
{
    /**
     * @param array{
     *     AssociationSet?: list<AssociationSetDetails>|null,
     *     OwnerId?: string|null,
     *     PropagatingVgwSet?: list<PropagatingVgwSetDetails>|null,
     *     RouteTableId?: string|null,
     *     RouteSet?: list<RouteSetDetails>|null,
     *     VpcId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
