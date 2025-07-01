<?php

namespace Sunaoka\Aws\Structures\Iam\ListAccessKeys\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $UserName
 * @property string|null $AccessKeyId
 * @property 'Active'|'Inactive'|'Expired'|null $Status
 * @property \Aws\Api\DateTimeResult|null $CreateDate
 */
class AccessKeyMetadata extends Shape
{
    /**
     * @param array{
     *     UserName?: string|null,
     *     AccessKeyId?: string|null,
     *     Status?: 'Active'|'Inactive'|'Expired'|null,
     *     CreateDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
