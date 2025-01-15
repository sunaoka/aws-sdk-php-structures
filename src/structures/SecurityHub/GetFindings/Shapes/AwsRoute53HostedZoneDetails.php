<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsRoute53HostedZoneObjectDetails|null $HostedZone
 * @property list<AwsRoute53HostedZoneVpcDetails>|null $Vpcs
 * @property list<string>|null $NameServers
 * @property AwsRoute53QueryLoggingConfigDetails|null $QueryLoggingConfig
 */
class AwsRoute53HostedZoneDetails extends Shape
{
    /**
     * @param array{
     *     HostedZone?: AwsRoute53HostedZoneObjectDetails|null,
     *     Vpcs?: list<AwsRoute53HostedZoneVpcDetails>|null,
     *     NameServers?: list<string>|null,
     *     QueryLoggingConfig?: AwsRoute53QueryLoggingConfigDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
