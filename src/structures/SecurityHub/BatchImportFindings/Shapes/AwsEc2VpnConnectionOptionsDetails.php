<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $StaticRoutesOnly
 * @property list<AwsEc2VpnConnectionOptionsTunnelOptionsDetails> $TunnelOptions
 */
class AwsEc2VpnConnectionOptionsDetails extends Shape
{
    /**
     * @param array{
     *     StaticRoutesOnly?: bool,
     *     TunnelOptions?: list<AwsEc2VpnConnectionOptionsTunnelOptionsDetails>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
