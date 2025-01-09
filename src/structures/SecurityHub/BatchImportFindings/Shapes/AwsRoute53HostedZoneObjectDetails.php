<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Name
 * @property AwsRoute53HostedZoneConfigDetails $Config
 */
class AwsRoute53HostedZoneObjectDetails extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Name?: string,
     *     Config?: AwsRoute53HostedZoneConfigDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
