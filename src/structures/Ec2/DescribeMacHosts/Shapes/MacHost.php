<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeMacHosts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $HostId
 * @property list<string>|null $MacOSLatestSupportedVersions
 */
class MacHost extends Shape
{
    /**
     * @param array{
     *     HostId?: string|null,
     *     MacOSLatestSupportedVersions?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
