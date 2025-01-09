<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeIndex\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property JwtTokenTypeConfiguration $JwtTokenTypeConfiguration
 * @property JsonTokenTypeConfiguration $JsonTokenTypeConfiguration
 */
class UserTokenConfiguration extends Shape
{
    /**
     * @param array{
     *     JwtTokenTypeConfiguration?: JwtTokenTypeConfiguration,
     *     JsonTokenTypeConfiguration?: JsonTokenTypeConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
