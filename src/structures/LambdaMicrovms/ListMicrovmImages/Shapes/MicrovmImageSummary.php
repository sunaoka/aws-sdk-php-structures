<?php

namespace Sunaoka\Aws\Structures\LambdaMicrovms\ListMicrovmImages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $imageArn
 * @property string $name
 * @property 'CREATING'|'CREATED'|'CREATE_FAILED'|'UPDATING'|'UPDATED'|'UPDATE_FAILED'|'DELETING'|'DELETE_FAILED'|'DELETED' $state
 * @property string|null $latestActiveImageVersion
 * @property string|null $latestFailedImageVersion
 * @property \Aws\Api\DateTimeResult $createdAt
 */
class MicrovmImageSummary extends Shape
{
    /**
     * @param array{
     *     imageArn: string,
     *     name: string,
     *     state: 'CREATING'|'CREATED'|'CREATE_FAILED'|'UPDATING'|'UPDATED'|'UPDATE_FAILED'|'DELETING'|'DELETE_FAILED'|'DELETED',
     *     latestActiveImageVersion?: string|null,
     *     latestFailedImageVersion?: string|null,
     *     createdAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
