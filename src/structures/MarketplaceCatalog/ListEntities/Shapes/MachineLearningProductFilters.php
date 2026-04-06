<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MachineLearningProductEntityIdFilter|null $EntityId
 * @property MachineLearningProductLastModifiedDateFilter|null $LastModifiedDate
 * @property MachineLearningProductTitleFilter|null $ProductTitle
 * @property MachineLearningProductVisibilityFilter|null $Visibility
 */
class MachineLearningProductFilters extends Shape
{
    /**
     * @param array{
     *     EntityId?: MachineLearningProductEntityIdFilter|null,
     *     LastModifiedDate?: MachineLearningProductLastModifiedDateFilter|null,
     *     ProductTitle?: MachineLearningProductTitleFilter|null,
     *     Visibility?: MachineLearningProductVisibilityFilter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
