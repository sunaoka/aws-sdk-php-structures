<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVpcBlockPublicAccessExclusion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ExclusionId
 * @property 'allow-bidirectional'|'allow-egress'|null $InternetGatewayExclusionMode
 * @property string|null $ResourceArn
 * @property 'create-in-progress'|'create-complete'|'create-failed'|'update-in-progress'|'update-complete'|'update-failed'|'delete-in-progress'|'delete-complete'|'disable-in-progress'|'disable-complete'|null $State
 * @property string|null $Reason
 * @property \Aws\Api\DateTimeResult|null $CreationTimestamp
 * @property \Aws\Api\DateTimeResult|null $LastUpdateTimestamp
 * @property \Aws\Api\DateTimeResult|null $DeletionTimestamp
 * @property list<Tag>|null $Tags
 */
class VpcBlockPublicAccessExclusion extends Shape
{
    /**
     * @param array{
     *     ExclusionId?: string|null,
     *     InternetGatewayExclusionMode?: 'allow-bidirectional'|'allow-egress'|null,
     *     ResourceArn?: string|null,
     *     State?: 'create-in-progress'|'create-complete'|'create-failed'|'update-in-progress'|'update-complete'|'update-failed'|'delete-in-progress'|'delete-complete'|'disable-in-progress'|'disable-complete'|null,
     *     Reason?: string|null,
     *     CreationTimestamp?: \Aws\Api\DateTimeResult|null,
     *     LastUpdateTimestamp?: \Aws\Api\DateTimeResult|null,
     *     DeletionTimestamp?: \Aws\Api\DateTimeResult|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
