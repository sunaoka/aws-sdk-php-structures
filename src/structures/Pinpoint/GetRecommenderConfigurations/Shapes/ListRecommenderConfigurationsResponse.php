<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetRecommenderConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RecommenderConfigurationResponse> $Item
 * @property string $NextToken
 */
class ListRecommenderConfigurationsResponse extends Shape
{
    /**
     * @param array{
     *     Item: list<RecommenderConfigurationResponse>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
