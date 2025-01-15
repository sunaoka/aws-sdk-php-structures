<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\GetCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TimeBasedCollectionScheme|null $timeBasedCollectionScheme
 * @property ConditionBasedCollectionScheme|null $conditionBasedCollectionScheme
 */
class CollectionScheme extends Shape
{
    /**
     * @param array{
     *     timeBasedCollectionScheme?: TimeBasedCollectionScheme|null,
     *     conditionBasedCollectionScheme?: ConditionBasedCollectionScheme|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
