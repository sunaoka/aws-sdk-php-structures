<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeInstanceTypeLimits\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LimitName
 * @property list<string> $LimitValues
 */
class AdditionalLimit extends Shape
{
    /**
     * @param array{
     *     LimitName?: string,
     *     LimitValues?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
