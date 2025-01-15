<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\DescribeAppAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $hasMoreErrors
 * @property list<ResourceError>|null $resourceErrors
 */
class ResourceErrorsDetails extends Shape
{
    /**
     * @param array{
     *     hasMoreErrors?: bool|null,
     *     resourceErrors?: list<ResourceError>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
