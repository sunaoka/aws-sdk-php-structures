<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateDistributionWithStagingConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $ErrorCode
 * @property string $ResponsePagePath
 * @property string $ResponseCode
 * @property int $ErrorCachingMinTTL
 */
class CustomErrorResponse extends Shape
{
    /**
     * @param array{
     *     ErrorCode: int,
     *     ResponsePagePath?: string,
     *     ResponseCode?: string,
     *     ErrorCachingMinTTL?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
