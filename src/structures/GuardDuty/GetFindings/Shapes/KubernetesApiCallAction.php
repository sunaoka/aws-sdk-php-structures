<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RequestUri
 * @property string $Verb
 * @property list<string> $SourceIps
 * @property string $UserAgent
 * @property RemoteIpDetails $RemoteIpDetails
 * @property int $StatusCode
 * @property string $Parameters
 * @property string $Resource
 * @property string $Subresource
 * @property string $Namespace
 * @property string $ResourceName
 */
class KubernetesApiCallAction extends Shape
{
    /**
     * @param array{
     *     RequestUri?: string,
     *     Verb?: string,
     *     SourceIps?: list<string>,
     *     UserAgent?: string,
     *     RemoteIpDetails?: RemoteIpDetails,
     *     StatusCode?: int,
     *     Parameters?: string,
     *     Resource?: string,
     *     Subresource?: string,
     *     Namespace?: string,
     *     ResourceName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
