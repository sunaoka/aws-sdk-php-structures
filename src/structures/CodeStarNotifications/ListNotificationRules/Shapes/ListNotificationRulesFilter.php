<?php

namespace Sunaoka\Aws\Structures\CodeStarNotifications\ListNotificationRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EVENT_TYPE_ID'|'CREATED_BY'|'RESOURCE'|'TARGET_ADDRESS' $Name
 * @property string $Value
 */
class ListNotificationRulesFilter extends Shape
{
    /**
     * @param array{
     *     Name: 'EVENT_TYPE_ID'|'CREATED_BY'|'RESOURCE'|'TARGET_ADDRESS',
     *     Value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
