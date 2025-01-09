<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GroupId
 * @property string $GroupName
 * @property string $PeeringStatus
 * @property string $UserId
 * @property string $VpcId
 * @property string $VpcPeeringConnectionId
 */
class AwsEc2SecurityGroupUserIdGroupPair extends Shape
{
    /**
     * @param array{
     *     GroupId?: string,
     *     GroupName?: string,
     *     PeeringStatus?: string,
     *     UserId?: string,
     *     VpcId?: string,
     *     VpcPeeringConnectionId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
