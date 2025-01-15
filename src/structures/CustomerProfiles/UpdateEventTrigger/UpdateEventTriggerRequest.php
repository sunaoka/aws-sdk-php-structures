<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\UpdateEventTrigger;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $EventTriggerName
 * @property string|null $ObjectTypeName
 * @property string|null $Description
 * @property list<Shapes\EventTriggerCondition>|null $EventTriggerConditions
 * @property string|null $SegmentFilter
 * @property Shapes\EventTriggerLimits|null $EventTriggerLimits
 */
class UpdateEventTriggerRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     EventTriggerName: string,
     *     ObjectTypeName?: string|null,
     *     Description?: string|null,
     *     EventTriggerConditions?: list<Shapes\EventTriggerCondition>|null,
     *     SegmentFilter?: string|null,
     *     EventTriggerLimits?: Shapes\EventTriggerLimits|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
