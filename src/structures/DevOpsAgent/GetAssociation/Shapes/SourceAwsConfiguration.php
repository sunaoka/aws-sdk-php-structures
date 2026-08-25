<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\GetAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property 'source' $accountType
 * @property string $assumableRoleArn
 * @property string|null $externalId
 * @property string|null $agentElevatedRoleArn
 * @property 'valid'|'invalid'|'pending-confirmation'|null $agentElevatedRoleArnStatus
 */
class SourceAwsConfiguration extends Shape
{
    /**
     * @param array{
     *     accountId: string,
     *     accountType: 'source',
     *     assumableRoleArn: string,
     *     externalId?: string|null,
     *     agentElevatedRoleArn?: string|null,
     *     agentElevatedRoleArnStatus?: 'valid'|'invalid'|'pending-confirmation'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
