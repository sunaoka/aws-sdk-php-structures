<?php

namespace Sunaoka\Aws\Structures\SecurityHub\DescribeSecurityHubV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED'|null $FeatureStatus
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 */
class FeatureDetail extends Shape
{
    /**
     * @param array{
     *     FeatureStatus?: 'ENABLED'|'DISABLED'|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
