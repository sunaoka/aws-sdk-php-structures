<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Api
 * @property string|null $CallerType
 * @property DomainDetails|null $DomainDetails
 * @property string|null $ErrorCode
 * @property string|null $UserAgent
 * @property RemoteIpDetails|null $RemoteIpDetails
 * @property string|null $ServiceName
 * @property RemoteAccountDetails|null $RemoteAccountDetails
 * @property array<string, string>|null $AffectedResources
 */
class AwsApiCallAction extends Shape
{
    /**
     * @param array{
     *     Api?: string|null,
     *     CallerType?: string|null,
     *     DomainDetails?: DomainDetails|null,
     *     ErrorCode?: string|null,
     *     UserAgent?: string|null,
     *     RemoteIpDetails?: RemoteIpDetails|null,
     *     ServiceName?: string|null,
     *     RemoteAccountDetails?: RemoteAccountDetails|null,
     *     AffectedResources?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
