<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVpcBlockPublicAccessOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AwsAccountId
 * @property string|null $AwsRegion
 * @property 'default-state'|'update-in-progress'|'update-complete'|null $State
 * @property 'off'|'block-bidirectional'|'block-ingress'|null $InternetGatewayBlockMode
 * @property string|null $Reason
 * @property \Aws\Api\DateTimeResult|null $LastUpdateTimestamp
 * @property 'account'|'declarative-policy'|null $ManagedBy
 * @property 'allowed'|'not-allowed'|null $ExclusionsAllowed
 */
class VpcBlockPublicAccessOptions extends Shape
{
    /**
     * @param array{
     *     AwsAccountId?: string|null,
     *     AwsRegion?: string|null,
     *     State?: 'default-state'|'update-in-progress'|'update-complete'|null,
     *     InternetGatewayBlockMode?: 'off'|'block-bidirectional'|'block-ingress'|null,
     *     Reason?: string|null,
     *     LastUpdateTimestamp?: \Aws\Api\DateTimeResult|null,
     *     ManagedBy?: 'account'|'declarative-policy'|null,
     *     ExclusionsAllowed?: 'allowed'|'not-allowed'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
