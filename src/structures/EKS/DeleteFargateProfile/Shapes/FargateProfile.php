<?php

namespace Sunaoka\Aws\Structures\EKS\DeleteFargateProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $fargateProfileName
 * @property string $fargateProfileArn
 * @property string $clusterName
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $podExecutionRoleArn
 * @property list<string> $subnets
 * @property list<FargateProfileSelector> $selectors
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'CREATE_FAILED'|'DELETE_FAILED' $status
 * @property array<string, string> $tags
 * @property FargateProfileHealth $health
 */
class FargateProfile extends Shape
{
    /**
     * @param array{
     *     fargateProfileName?: string,
     *     fargateProfileArn?: string,
     *     clusterName?: string,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     podExecutionRoleArn?: string,
     *     subnets?: list<string>,
     *     selectors?: list<FargateProfileSelector>,
     *     status?: 'CREATING'|'ACTIVE'|'DELETING'|'CREATE_FAILED'|'DELETE_FAILED',
     *     tags?: array<string, string>,
     *     health?: FargateProfileHealth
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
