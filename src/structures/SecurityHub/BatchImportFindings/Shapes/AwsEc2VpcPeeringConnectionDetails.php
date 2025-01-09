<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsEc2VpcPeeringConnectionVpcInfoDetails $AccepterVpcInfo
 * @property string $ExpirationTime
 * @property AwsEc2VpcPeeringConnectionVpcInfoDetails $RequesterVpcInfo
 * @property AwsEc2VpcPeeringConnectionStatusDetails $Status
 * @property string $VpcPeeringConnectionId
 */
class AwsEc2VpcPeeringConnectionDetails extends Shape
{
    /**
     * @param array{
     *     AccepterVpcInfo?: AwsEc2VpcPeeringConnectionVpcInfoDetails,
     *     ExpirationTime?: string,
     *     RequesterVpcInfo?: AwsEc2VpcPeeringConnectionVpcInfoDetails,
     *     Status?: AwsEc2VpcPeeringConnectionStatusDetails,
     *     VpcPeeringConnectionId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
