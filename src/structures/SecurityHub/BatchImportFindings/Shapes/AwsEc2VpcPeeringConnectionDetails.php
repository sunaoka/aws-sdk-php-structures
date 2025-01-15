<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsEc2VpcPeeringConnectionVpcInfoDetails|null $AccepterVpcInfo
 * @property string|null $ExpirationTime
 * @property AwsEc2VpcPeeringConnectionVpcInfoDetails|null $RequesterVpcInfo
 * @property AwsEc2VpcPeeringConnectionStatusDetails|null $Status
 * @property string|null $VpcPeeringConnectionId
 */
class AwsEc2VpcPeeringConnectionDetails extends Shape
{
    /**
     * @param array{
     *     AccepterVpcInfo?: AwsEc2VpcPeeringConnectionVpcInfoDetails|null,
     *     ExpirationTime?: string|null,
     *     RequesterVpcInfo?: AwsEc2VpcPeeringConnectionVpcInfoDetails|null,
     *     Status?: AwsEc2VpcPeeringConnectionStatusDetails|null,
     *     VpcPeeringConnectionId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
