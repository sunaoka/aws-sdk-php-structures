<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeleteHarnessEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $harnessId
 * @property string $harnessName
 * @property string $endpointName
 * @property string $arn
 * @property 'CREATING'|'CREATE_FAILED'|'UPDATING'|'UPDATE_FAILED'|'READY'|'DELETING'|'DELETE_FAILED' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string|null $liveVersion
 * @property string|null $targetVersion
 * @property string|null $description
 * @property string|null $failureReason
 */
class HarnessEndpoint extends Shape
{
    /**
     * @param array{
     *     harnessId: string,
     *     harnessName: string,
     *     endpointName: string,
     *     arn: string,
     *     status: 'CREATING'|'CREATE_FAILED'|'UPDATING'|'UPDATE_FAILED'|'READY'|'DELETING'|'DELETE_FAILED',
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     liveVersion?: string|null,
     *     targetVersion?: string|null,
     *     description?: string|null,
     *     failureReason?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
