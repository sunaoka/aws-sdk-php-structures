<?php

namespace Sunaoka\Aws\Structures\OAM\CreateLink;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LabelTemplate
 * @property list<'AWS::CloudWatch::Metric'|'AWS::Logs::LogGroup'|'AWS::XRay::Trace'> $ResourceTypes
 * @property string $SinkIdentifier
 * @property array<string, string>|null $Tags
 */
class CreateLinkRequest extends Request
{
    /**
     * @param array{
     *     LabelTemplate: string,
     *     ResourceTypes: list<'AWS::CloudWatch::Metric'|'AWS::Logs::LogGroup'|'AWS::XRay::Trace'>,
     *     SinkIdentifier: string,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
