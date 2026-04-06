<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RequestUri
 * @property string|null $Verb
 * @property string|null $Resource
 * @property string|null $Subresource
 * @property string|null $Namespace
 * @property string|null $ResourceName
 * @property list<string>|null $SourceIps
 * @property string|null $UserAgent
 * @property RemoteIpDetails|null $RemoteIpDetails
 * @property int|null $StatusCode
 * @property string|null $Parameters
 */
class KubernetesApiCallAction extends Shape
{
    /**
     * @param array{
     *     RequestUri?: string|null,
     *     Verb?: string|null,
     *     Resource?: string|null,
     *     Subresource?: string|null,
     *     Namespace?: string|null,
     *     ResourceName?: string|null,
     *     SourceIps?: list<string>|null,
     *     UserAgent?: string|null,
     *     RemoteIpDetails?: RemoteIpDetails|null,
     *     StatusCode?: int|null,
     *     Parameters?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
