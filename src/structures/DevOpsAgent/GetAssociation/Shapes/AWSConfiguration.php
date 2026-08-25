<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\GetAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $assumableRoleArn
 * @property string $accountId
 * @property 'monitor' $accountType
 * @property string|null $agentElevatedRoleArn
 * @property 'valid'|'invalid'|'pending-confirmation'|null $agentElevatedRoleArnStatus
 */
class AWSConfiguration extends Shape
{
    /**
     * @param array{
     *     assumableRoleArn: string,
     *     accountId: string,
     *     accountType: 'monitor',
     *     agentElevatedRoleArn?: string|null,
     *     agentElevatedRoleArnStatus?: 'valid'|'invalid'|'pending-confirmation'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
