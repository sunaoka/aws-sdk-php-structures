<?php

namespace Sunaoka\Aws\Structures\OAM\UpdateLink;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 * @property bool|null $IncludeTags
 * @property Shapes\LinkConfiguration|null $LinkConfiguration
 * @property list<'AWS::CloudWatch::Metric'|'AWS::Logs::LogGroup'|'AWS::XRay::Trace'|'AWS::ApplicationInsights::Application'|'AWS::InternetMonitor::Monitor'|'AWS::ApplicationSignals::Service'|'AWS::ApplicationSignals::ServiceLevelObjective'> $ResourceTypes
 */
class UpdateLinkRequest extends Request
{
    /**
     * @param array{
     *     Identifier: string,
     *     IncludeTags?: bool|null,
     *     LinkConfiguration?: Shapes\LinkConfiguration|null,
     *     ResourceTypes: list<'AWS::CloudWatch::Metric'|'AWS::Logs::LogGroup'|'AWS::XRay::Trace'|'AWS::ApplicationInsights::Application'|'AWS::InternetMonitor::Monitor'|'AWS::ApplicationSignals::Service'|'AWS::ApplicationSignals::ServiceLevelObjective'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
