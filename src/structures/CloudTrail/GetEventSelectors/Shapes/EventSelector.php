<?php

namespace Sunaoka\Aws\Structures\CloudTrail\GetEventSelectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ReadOnly'|'WriteOnly'|'All' $ReadWriteType
 * @property bool $IncludeManagementEvents
 * @property list<DataResource> $DataResources
 * @property list<string> $ExcludeManagementEventSources
 */
class EventSelector extends Shape
{
    /**
     * @param array{
     *     ReadWriteType?: 'ReadOnly'|'WriteOnly'|'All',
     *     IncludeManagementEvents?: bool,
     *     DataResources?: list<DataResource>,
     *     ExcludeManagementEventSources?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
