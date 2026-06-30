<?php

namespace Sunaoka\Aws\Structures\Connect\StartContactConversationalAnalyticsJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $ContactId
 * @property list<'PostContact'|'RealTime'|'ContactLens'|'AutomatedInteraction'> $AnalyticsModes
 * @property Shapes\AnalyticsConfiguration $AnalyticsConfiguration
 * @property string|null $ClientToken
 */
class StartContactConversationalAnalyticsJobRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ContactId: string,
     *     AnalyticsModes: list<'PostContact'|'RealTime'|'ContactLens'|'AutomatedInteraction'>,
     *     AnalyticsConfiguration: Shapes\AnalyticsConfiguration,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
