<?php

namespace Sunaoka\Aws\Structures\EKS\CreateFargateProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $fargateProfileName
 * @property string|null $fargateProfileArn
 * @property string|null $clusterName
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $podExecutionRoleArn
 * @property list<string>|null $subnets
 * @property list<FargateProfileSelector>|null $selectors
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'CREATE_FAILED'|'DELETE_FAILED'|null $status
 * @property array<string, string>|null $tags
 * @property FargateProfileHealth|null $health
 */
class FargateProfile extends Shape
{
    /**
     * @param array{
     *     fargateProfileName?: string|null,
     *     fargateProfileArn?: string|null,
     *     clusterName?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     podExecutionRoleArn?: string|null,
     *     subnets?: list<string>|null,
     *     selectors?: list<FargateProfileSelector>|null,
     *     status?: 'CREATING'|'ACTIVE'|'DELETING'|'CREATE_FAILED'|'DELETE_FAILED'|null,
     *     tags?: array<string, string>|null,
     *     health?: FargateProfileHealth|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
