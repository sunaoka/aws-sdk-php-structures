<?php

namespace Sunaoka\Aws\Structures\Macie2\GetAllowList\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OK'|'S3_OBJECT_NOT_FOUND'|'S3_USER_ACCESS_DENIED'|'S3_OBJECT_ACCESS_DENIED'|'S3_THROTTLED'|'S3_OBJECT_OVERSIZE'|'S3_OBJECT_EMPTY'|'UNKNOWN_ERROR' $code
 * @property string|null $description
 */
class AllowListStatus extends Shape
{
    /**
     * @param array{
     *     code: 'OK'|'S3_OBJECT_NOT_FOUND'|'S3_USER_ACCESS_DENIED'|'S3_OBJECT_ACCESS_DENIED'|'S3_THROTTLED'|'S3_OBJECT_OVERSIZE'|'S3_OBJECT_EMPTY'|'UNKNOWN_ERROR',
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
