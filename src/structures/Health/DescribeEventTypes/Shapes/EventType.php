<?php

namespace Sunaoka\Aws\Structures\Health\DescribeEventTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $service
 * @property string|null $code
 * @property 'issue'|'accountNotification'|'scheduledChange'|'investigation'|null $category
 * @property 'ACTION_REQUIRED'|'ACTION_MAY_BE_REQUIRED'|'INFORMATIONAL'|null $actionability
 * @property list<'OPERATIONS'|'SECURITY'|'BILLING'>|null $personas
 */
class EventType extends Shape
{
    /**
     * @param array{
     *     service?: string|null,
     *     code?: string|null,
     *     category?: 'issue'|'accountNotification'|'scheduledChange'|'investigation'|null,
     *     actionability?: 'ACTION_REQUIRED'|'ACTION_MAY_BE_REQUIRED'|'INFORMATIONAL'|null,
     *     personas?: list<'OPERATIONS'|'SECURITY'|'BILLING'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
