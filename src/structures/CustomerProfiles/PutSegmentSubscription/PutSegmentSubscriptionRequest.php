<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\PutSegmentSubscription;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $SegmentDefinitionName
 * @property Shapes\ScheduleConfiguration|null $ScheduleConfiguration
 */
class PutSegmentSubscriptionRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     SegmentDefinitionName: string,
     *     ScheduleConfiguration?: Shapes\ScheduleConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
