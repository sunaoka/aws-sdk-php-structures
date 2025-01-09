<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\DescribeAppAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $hasMoreErrors
 * @property list<ResourceError> $resourceErrors
 */
class ResourceErrorsDetails extends Shape
{
    /**
     * @param array{
     *     hasMoreErrors?: bool,
     *     resourceErrors?: list<ResourceError>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
