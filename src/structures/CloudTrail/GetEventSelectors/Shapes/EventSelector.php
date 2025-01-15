<?php

namespace Sunaoka\Aws\Structures\CloudTrail\GetEventSelectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ReadOnly'|'WriteOnly'|'All'|null $ReadWriteType
 * @property bool|null $IncludeManagementEvents
 * @property list<DataResource>|null $DataResources
 * @property list<string>|null $ExcludeManagementEventSources
 */
class EventSelector extends Shape
{
    /**
     * @param array{
     *     ReadWriteType?: 'ReadOnly'|'WriteOnly'|'All'|null,
     *     IncludeManagementEvents?: bool|null,
     *     DataResources?: list<DataResource>|null,
     *     ExcludeManagementEventSources?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
