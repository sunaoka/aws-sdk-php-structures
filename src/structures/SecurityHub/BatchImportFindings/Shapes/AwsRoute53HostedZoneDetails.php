<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsRoute53HostedZoneObjectDetails $HostedZone
 * @property list<AwsRoute53HostedZoneVpcDetails> $Vpcs
 * @property list<string> $NameServers
 * @property AwsRoute53QueryLoggingConfigDetails $QueryLoggingConfig
 */
class AwsRoute53HostedZoneDetails extends Shape
{
    /**
     * @param array{
     *     HostedZone?: AwsRoute53HostedZoneObjectDetails,
     *     Vpcs?: list<AwsRoute53HostedZoneVpcDetails>,
     *     NameServers?: list<string>,
     *     QueryLoggingConfig?: AwsRoute53QueryLoggingConfigDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
