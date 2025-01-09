<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\DescribeApplicationProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DetailedTitle
 * @property string $LongDescription
 */
class ResourceServerScopeDetails extends Shape
{
    /**
     * @param array{
     *     DetailedTitle?: string,
     *     LongDescription?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
