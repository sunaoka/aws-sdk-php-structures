<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetInsights\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InsightArn
 * @property string $Name
 * @property AwsSecurityFindingFilters $Filters
 * @property string $GroupByAttribute
 */
class Insight extends Shape
{
    /**
     * @param array{
     *     InsightArn: string,
     *     Name: string,
     *     Filters: AwsSecurityFindingFilters,
     *     GroupByAttribute: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
