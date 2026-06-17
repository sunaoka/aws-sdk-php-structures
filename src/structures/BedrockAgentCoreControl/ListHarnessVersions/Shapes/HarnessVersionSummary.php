<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListHarnessVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $harnessId
 * @property string $harnessName
 * @property string $arn
 * @property string $harnessVersion
 * @property 'CREATING'|'CREATE_FAILED'|'UPDATING'|'UPDATE_FAILED'|'READY'|'DELETING'|'DELETE_FAILED' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string|null $failureReason
 */
class HarnessVersionSummary extends Shape
{
    /**
     * @param array{
     *     harnessId: string,
     *     harnessName: string,
     *     arn: string,
     *     harnessVersion: string,
     *     status: 'CREATING'|'CREATE_FAILED'|'UPDATING'|'UPDATE_FAILED'|'READY'|'DELETING'|'DELETE_FAILED',
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     failureReason?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
