<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetRecommenderConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RecommenderConfigurationResponse> $Item
 * @property string|null $NextToken
 */
class ListRecommenderConfigurationsResponse extends Shape
{
    /**
     * @param array{
     *     Item: list<RecommenderConfigurationResponse>,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
