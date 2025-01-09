<?php

namespace Sunaoka\Aws\Structures\SesV2\ListContacts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OPT_IN'|'OPT_OUT' $FilteredStatus
 * @property TopicFilter $TopicFilter
 */
class ListContactsFilter extends Shape
{
    /**
     * @param array{
     *     FilteredStatus?: 'OPT_IN'|'OPT_OUT',
     *     TopicFilter?: TopicFilter
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
