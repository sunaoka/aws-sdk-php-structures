<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListFoundationModels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ACTIVE'|'LEGACY' $status
 * @property \Aws\Api\DateTimeResult|null $startOfLifeTime
 * @property \Aws\Api\DateTimeResult|null $endOfLifeTime
 * @property \Aws\Api\DateTimeResult|null $legacyTime
 * @property \Aws\Api\DateTimeResult|null $publicExtendedAccessTime
 */
class FoundationModelLifecycle extends Shape
{
    /**
     * @param array{
     *     status: 'ACTIVE'|'LEGACY',
     *     startOfLifeTime?: \Aws\Api\DateTimeResult|null,
     *     endOfLifeTime?: \Aws\Api\DateTimeResult|null,
     *     legacyTime?: \Aws\Api\DateTimeResult|null,
     *     publicExtendedAccessTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
