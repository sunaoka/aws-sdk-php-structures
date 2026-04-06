<?php

namespace Sunaoka\Aws\Structures\OAM\CreateLink;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LabelTemplate
 * @property Shapes\LinkConfiguration|null $LinkConfiguration
 * @property list<'AWS::CloudWatch::Metric'|'AWS::Logs::LogGroup'|'AWS::XRay::Trace'|'AWS::ApplicationInsights::Application'|'AWS::InternetMonitor::Monitor'> $ResourceTypes
 * @property string $SinkIdentifier
 * @property array<string, string>|null $Tags
 */
class CreateLinkRequest extends Request
{
    /**
     * @param array{
     *     LabelTemplate: string,
     *     LinkConfiguration?: Shapes\LinkConfiguration|null,
     *     ResourceTypes: list<'AWS::CloudWatch::Metric'|'AWS::Logs::LogGroup'|'AWS::XRay::Trace'|'AWS::ApplicationInsights::Application'|'AWS::InternetMonitor::Monitor'>,
     *     SinkIdentifier: string,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
