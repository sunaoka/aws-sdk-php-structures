<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NEW_TAB'|'NEW_WINDOW'|'SAME_TAB' $Target
 * @property TableFieldLinkContentConfiguration $Content
 */
class TableFieldLinkConfiguration extends Shape
{
    /**
     * @param array{
     *     Target: 'NEW_TAB'|'NEW_WINDOW'|'SAME_TAB',
     *     Content: TableFieldLinkContentConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
