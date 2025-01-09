<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListImageVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property string $FailureReason
 * @property string $ImageArn
 * @property string $ImageVersionArn
 * @property 'CREATING'|'CREATED'|'CREATE_FAILED'|'DELETING'|'DELETE_FAILED' $ImageVersionStatus
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property int $Version
 */
class ImageVersion extends Shape
{
    /**
     * @param array{
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     FailureReason?: string,
     *     ImageArn: string,
     *     ImageVersionArn: string,
     *     ImageVersionStatus: 'CREATING'|'CREATED'|'CREATE_FAILED'|'DELETING'|'DELETE_FAILED',
     *     LastModifiedTime: \Aws\Api\DateTimeResult,
     *     Version: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
