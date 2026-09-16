<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\GetDependencyInsights\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CROSS_REGION'|'NEW_DEPENDENCY'|'THIRD_PARTY'|'UNEVEN_USAGE'|'AWS_SERVICE' $category
 * @property string $description
 */
class DependencyInsight extends Shape
{
    /**
     * @param array{
     *     category: 'CROSS_REGION'|'NEW_DEPENDENCY'|'THIRD_PARTY'|'UNEVEN_USAGE'|'AWS_SERVICE',
     *     description: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
