<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeMacHosts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $HostId
 * @property list<string> $MacOSLatestSupportedVersions
 */
class MacHost extends Shape
{
    /**
     * @param array{
     *     HostId?: string,
     *     MacOSLatestSupportedVersions?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
