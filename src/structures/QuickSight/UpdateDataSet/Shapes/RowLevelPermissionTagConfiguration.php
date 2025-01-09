<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $Status
 * @property list<RowLevelPermissionTagRule> $TagRules
 * @property list<list<string>> $TagRuleConfigurations
 */
class RowLevelPermissionTagConfiguration extends Shape
{
    /**
     * @param array{
     *     Status?: 'ENABLED'|'DISABLED',
     *     TagRules: list<RowLevelPermissionTagRule>,
     *     TagRuleConfigurations?: list<list<string>>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
