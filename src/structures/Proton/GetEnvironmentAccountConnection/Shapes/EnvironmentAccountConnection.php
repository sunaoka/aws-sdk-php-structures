<?php

namespace Sunaoka\Aws\Structures\Proton\GetEnvironmentAccountConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string|null $codebuildRoleArn
 * @property string|null $componentRoleArn
 * @property string $environmentAccountId
 * @property string $environmentName
 * @property string $id
 * @property \Aws\Api\DateTimeResult $lastModifiedAt
 * @property string $managementAccountId
 * @property \Aws\Api\DateTimeResult $requestedAt
 * @property string $roleArn
 * @property 'PENDING'|'CONNECTED'|'REJECTED' $status
 */
class EnvironmentAccountConnection extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     codebuildRoleArn?: string|null,
     *     componentRoleArn?: string|null,
     *     environmentAccountId: string,
     *     environmentName: string,
     *     id: string,
     *     lastModifiedAt: \Aws\Api\DateTimeResult,
     *     managementAccountId: string,
     *     requestedAt: \Aws\Api\DateTimeResult,
     *     roleArn: string,
     *     status: 'PENDING'|'CONNECTED'|'REJECTED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
