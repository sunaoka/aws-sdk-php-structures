<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeIndex\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property JwtTokenTypeConfiguration|null $JwtTokenTypeConfiguration
 * @property JsonTokenTypeConfiguration|null $JsonTokenTypeConfiguration
 */
class UserTokenConfiguration extends Shape
{
    /**
     * @param array{
     *     JwtTokenTypeConfiguration?: JwtTokenTypeConfiguration|null,
     *     JsonTokenTypeConfiguration?: JsonTokenTypeConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
