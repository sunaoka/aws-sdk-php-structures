<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Api
 * @property string|null $ServiceName
 * @property string|null $CallerType
 * @property ActionRemoteIpDetails|null $RemoteIpDetails
 * @property AwsApiCallActionDomainDetails|null $DomainDetails
 * @property array<string, string>|null $AffectedResources
 * @property string|null $FirstSeen
 * @property string|null $LastSeen
 */
class AwsApiCallAction extends Shape
{
    /**
     * @param array{
     *     Api?: string|null,
     *     ServiceName?: string|null,
     *     CallerType?: string|null,
     *     RemoteIpDetails?: ActionRemoteIpDetails|null,
     *     DomainDetails?: AwsApiCallActionDomainDetails|null,
     *     AffectedResources?: array<string, string>|null,
     *     FirstSeen?: string|null,
     *     LastSeen?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
