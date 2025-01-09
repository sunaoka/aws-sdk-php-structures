<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Api
 * @property string $CallerType
 * @property DomainDetails $DomainDetails
 * @property string $ErrorCode
 * @property string $UserAgent
 * @property RemoteIpDetails $RemoteIpDetails
 * @property string $ServiceName
 * @property RemoteAccountDetails $RemoteAccountDetails
 * @property array<string, string> $AffectedResources
 */
class AwsApiCallAction extends Shape
{
    /**
     * @param array{
     *     Api?: string,
     *     CallerType?: string,
     *     DomainDetails?: DomainDetails,
     *     ErrorCode?: string,
     *     UserAgent?: string,
     *     RemoteIpDetails?: RemoteIpDetails,
     *     ServiceName?: string,
     *     RemoteAccountDetails?: RemoteAccountDetails,
     *     AffectedResources?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
