<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Api
 * @property string $ServiceName
 * @property string $CallerType
 * @property ActionRemoteIpDetails $RemoteIpDetails
 * @property AwsApiCallActionDomainDetails $DomainDetails
 * @property array<string, string> $AffectedResources
 * @property string $FirstSeen
 * @property string $LastSeen
 */
class AwsApiCallAction extends Shape
{
    /**
     * @param array{
     *     Api?: string,
     *     ServiceName?: string,
     *     CallerType?: string,
     *     RemoteIpDetails?: ActionRemoteIpDetails,
     *     DomainDetails?: AwsApiCallActionDomainDetails,
     *     AffectedResources?: array<string, string>,
     *     FirstSeen?: string,
     *     LastSeen?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
