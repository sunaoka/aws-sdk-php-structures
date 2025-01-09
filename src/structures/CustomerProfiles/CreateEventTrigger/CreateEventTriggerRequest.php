<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateEventTrigger;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $EventTriggerName
 * @property string $ObjectTypeName
 * @property string $Description
 * @property list<Shapes\EventTriggerCondition> $EventTriggerConditions
 * @property string $SegmentFilter
 * @property Shapes\EventTriggerLimits $EventTriggerLimits
 * @property array<string, string> $Tags
 */
class CreateEventTriggerRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     EventTriggerName: string,
     *     ObjectTypeName: string,
     *     Description?: string,
     *     EventTriggerConditions: list<Shapes\EventTriggerCondition>,
     *     SegmentFilter?: string,
     *     EventTriggerLimits?: Shapes\EventTriggerLimits,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
