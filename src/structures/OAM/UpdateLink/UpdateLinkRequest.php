<?php

namespace Sunaoka\Aws\Structures\OAM\UpdateLink;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 * @property list<'AWS::CloudWatch::Metric'|'AWS::Logs::LogGroup'|'AWS::XRay::Trace'> $ResourceTypes
 */
class UpdateLinkRequest extends Request
{
    /**
     * @param array{
     *     Identifier: string,
     *     ResourceTypes: list<'AWS::CloudWatch::Metric'|'AWS::Logs::LogGroup'|'AWS::XRay::Trace'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
