<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $StaticRoutesOnly
 * @property list<AwsEc2VpnConnectionOptionsTunnelOptionsDetails>|null $TunnelOptions
 */
class AwsEc2VpnConnectionOptionsDetails extends Shape
{
    /**
     * @param array{
     *     StaticRoutesOnly?: bool|null,
     *     TunnelOptions?: list<AwsEc2VpnConnectionOptionsTunnelOptionsDetails>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
