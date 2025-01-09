<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVpcBlockPublicAccessExclusion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ExclusionId
 * @property 'allow-bidirectional'|'allow-egress' $InternetGatewayExclusionMode
 * @property string $ResourceArn
 * @property 'create-in-progress'|'create-complete'|'create-failed'|'update-in-progress'|'update-complete'|'update-failed'|'delete-in-progress'|'delete-complete'|'disable-in-progress'|'disable-complete' $State
 * @property string $Reason
 * @property \Aws\Api\DateTimeResult $CreationTimestamp
 * @property \Aws\Api\DateTimeResult $LastUpdateTimestamp
 * @property \Aws\Api\DateTimeResult $DeletionTimestamp
 * @property list<Tag> $Tags
 */
class VpcBlockPublicAccessExclusion extends Shape
{
    /**
     * @param array{
     *     ExclusionId?: string,
     *     InternetGatewayExclusionMode?: 'allow-bidirectional'|'allow-egress',
     *     ResourceArn?: string,
     *     State?: 'create-in-progress'|'create-complete'|'create-failed'|'update-in-progress'|'update-complete'|'update-failed'|'delete-in-progress'|'delete-complete'|'disable-in-progress'|'disable-complete',
     *     Reason?: string,
     *     CreationTimestamp?: \Aws\Api\DateTimeResult,
     *     LastUpdateTimestamp?: \Aws\Api\DateTimeResult,
     *     DeletionTimestamp?: \Aws\Api\DateTimeResult,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
