<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED'|null $Status
 * @property list<RowLevelPermissionTagRule> $TagRules
 * @property list<list<string>>|null $TagRuleConfigurations
 */
class RowLevelPermissionTagConfiguration extends Shape
{
    /**
     * @param array{
     *     Status?: 'ENABLED'|'DISABLED'|null,
     *     TagRules: list<RowLevelPermissionTagRule>,
     *     TagRuleConfigurations?: list<list<string>>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
