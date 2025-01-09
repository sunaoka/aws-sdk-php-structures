<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\CreateCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TimeBasedCollectionScheme $timeBasedCollectionScheme
 * @property ConditionBasedCollectionScheme $conditionBasedCollectionScheme
 */
class CollectionScheme extends Shape
{
    /**
     * @param array{
     *     timeBasedCollectionScheme?: TimeBasedCollectionScheme,
     *     conditionBasedCollectionScheme?: ConditionBasedCollectionScheme
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
