<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateEventTrigger;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $EventTriggerName
 * @property string $ObjectTypeName
 * @property string|null $Description
 * @property list<Shapes\EventTriggerCondition> $EventTriggerConditions
 * @property string|null $SegmentFilter
 * @property Shapes\EventTriggerLimits|null $EventTriggerLimits
 * @property array<string, string>|null $Tags
 */
class CreateEventTriggerRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     EventTriggerName: string,
     *     ObjectTypeName: string,
     *     Description?: string|null,
     *     EventTriggerConditions: list<Shapes\EventTriggerCondition>,
     *     SegmentFilter?: string|null,
     *     EventTriggerLimits?: Shapes\EventTriggerLimits|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
