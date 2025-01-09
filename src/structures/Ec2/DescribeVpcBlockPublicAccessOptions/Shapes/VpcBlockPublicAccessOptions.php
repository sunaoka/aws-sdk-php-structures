<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpcBlockPublicAccessOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AwsAccountId
 * @property string $AwsRegion
 * @property 'default-state'|'update-in-progress'|'update-complete' $State
 * @property 'off'|'block-bidirectional'|'block-ingress' $InternetGatewayBlockMode
 * @property string $Reason
 * @property \Aws\Api\DateTimeResult $LastUpdateTimestamp
 * @property 'account'|'declarative-policy' $ManagedBy
 * @property 'allowed'|'not-allowed' $ExclusionsAllowed
 */
class VpcBlockPublicAccessOptions extends Shape
{
    /**
     * @param array{
     *     AwsAccountId?: string,
     *     AwsRegion?: string,
     *     State?: 'default-state'|'update-in-progress'|'update-complete',
     *     InternetGatewayBlockMode?: 'off'|'block-bidirectional'|'block-ingress',
     *     Reason?: string,
     *     LastUpdateTimestamp?: \Aws\Api\DateTimeResult,
     *     ManagedBy?: 'account'|'declarative-policy',
     *     ExclusionsAllowed?: 'allowed'|'not-allowed'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
