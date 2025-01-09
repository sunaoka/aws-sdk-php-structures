<?php

namespace Sunaoka\Aws\Structures\Ssm\GetCalendarState;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $CalendarNames
 * @property string $AtTime
 */
class GetCalendarStateRequest extends Request
{
    /**
     * @param array{
     *     CalendarNames: list<string>,
     *     AtTime?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
