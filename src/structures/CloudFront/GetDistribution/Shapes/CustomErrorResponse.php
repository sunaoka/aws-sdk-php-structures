<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetDistribution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $ErrorCode
 * @property string|null $ResponsePagePath
 * @property string|null $ResponseCode
 * @property int|null $ErrorCachingMinTTL
 */
class CustomErrorResponse extends Shape
{
    /**
     * @param array{
     *     ErrorCode: int,
     *     ResponsePagePath?: string|null,
     *     ResponseCode?: string|null,
     *     ErrorCachingMinTTL?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
