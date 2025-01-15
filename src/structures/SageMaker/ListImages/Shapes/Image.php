<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListImages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property string|null $Description
 * @property string|null $DisplayName
 * @property string|null $FailureReason
 * @property string $ImageArn
 * @property string $ImageName
 * @property 'CREATING'|'CREATED'|'CREATE_FAILED'|'UPDATING'|'UPDATE_FAILED'|'DELETING'|'DELETE_FAILED' $ImageStatus
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 */
class Image extends Shape
{
    /**
     * @param array{
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     Description?: string|null,
     *     DisplayName?: string|null,
     *     FailureReason?: string|null,
     *     ImageArn: string,
     *     ImageName: string,
     *     ImageStatus: 'CREATING'|'CREATED'|'CREATE_FAILED'|'UPDATING'|'UPDATE_FAILED'|'DELETING'|'DELETE_FAILED',
     *     LastModifiedTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
