<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\UpdateSpace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $spaceId
 * @property string $name
 * @property string $spaceArn
 * @property string|null $domainArn
 * @property string $region
 * @property string $ownerAccountId
 * @property string $dataAccessRoleArn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string|null $agentCoreEvaluationRoleArn
 * @property 'ACTIVE'|'SUSPENDED'|'MOVING' $status
 * @property string|null $statusReason
 * @property EncryptionConfiguration|null $encryptionConfiguration
 */
class Space extends Shape
{
    /**
     * @param array{
     *     spaceId: string,
     *     name: string,
     *     spaceArn: string,
     *     domainArn?: string|null,
     *     region: string,
     *     ownerAccountId: string,
     *     dataAccessRoleArn: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     agentCoreEvaluationRoleArn?: string|null,
     *     status: 'ACTIVE'|'SUSPENDED'|'MOVING',
     *     statusReason?: string|null,
     *     encryptionConfiguration?: EncryptionConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
