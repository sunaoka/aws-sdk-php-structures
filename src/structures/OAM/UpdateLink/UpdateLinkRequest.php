<?php

namespace Sunaoka\Aws\Structures\OAM\UpdateLink;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 * @property Shapes\LinkConfiguration|null $LinkConfiguration
 * @property list<'AWS::CloudWatch::Metric'|'AWS::Logs::LogGroup'|'AWS::XRay::Trace'|'AWS::ApplicationInsights::Application'|'AWS::InternetMonitor::Monitor'> $ResourceTypes
 */
class UpdateLinkRequest extends Request
{
    /**
     * @param array{
     *     Identifier: string,
     *     LinkConfiguration?: Shapes\LinkConfiguration|null,
     *     ResourceTypes: list<'AWS::CloudWatch::Metric'|'AWS::Logs::LogGroup'|'AWS::XRay::Trace'|'AWS::ApplicationInsights::Application'|'AWS::InternetMonitor::Monitor'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
