<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\DescribeChangeSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ChangeType
 * @property Entity|null $Entity
 * @property string|null $Details
 * @property list<ErrorDetail>|null $ErrorDetailList
 * @property string|null $ChangeName
 */
class ChangeSummary extends Shape
{
    /**
     * @param array{
     *     ChangeType?: string|null,
     *     Entity?: Entity|null,
     *     Details?: string|null,
     *     ErrorDetailList?: list<ErrorDetail>|null,
     *     ChangeName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
