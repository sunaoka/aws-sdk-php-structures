<?php

namespace Sunaoka\Aws\Structures\Iam\ListAccessKeys\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $UserName
 * @property string $AccessKeyId
 * @property 'Active'|'Inactive' $Status
 * @property \Aws\Api\DateTimeResult $CreateDate
 */
class AccessKeyMetadata extends Shape
{
    /**
     * @param array{
     *     UserName?: string,
     *     AccessKeyId?: string,
     *     Status?: 'Active'|'Inactive',
     *     CreateDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
