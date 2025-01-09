<?php

namespace Sunaoka\Aws\Structures\OAM\CreateLink;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LabelTemplate
 * @property Shapes\LinkConfiguration $LinkConfiguration
 * @property list<'AWS::CloudWatch::Metric'|'AWS::Logs::LogGroup'|'AWS::XRay::Trace'|'AWS::ApplicationInsights::Application'|'AWS::InternetMonitor::Monitor'> $ResourceTypes
 * @property string $SinkIdentifier
 * @property array<string, string> $Tags
 */
class CreateLinkRequest extends Request
{
    /**
     * @param array{
     *     LabelTemplate: string,
     *     LinkConfiguration?: Shapes\LinkConfiguration,
     *     ResourceTypes: list<'AWS::CloudWatch::Metric'|'AWS::Logs::LogGroup'|'AWS::XRay::Trace'|'AWS::ApplicationInsights::Application'|'AWS::InternetMonitor::Monitor'>,
     *     SinkIdentifier: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
