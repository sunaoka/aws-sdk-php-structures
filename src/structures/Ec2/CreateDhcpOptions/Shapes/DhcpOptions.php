<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateDhcpOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OwnerId
 * @property list<Tag> $Tags
 * @property string $DhcpOptionsId
 * @property list<DhcpConfiguration> $DhcpConfigurations
 */
class DhcpOptions extends Shape
{
    /**
     * @param array{
     *     OwnerId?: string,
     *     Tags?: list<Tag>,
     *     DhcpOptionsId?: string,
     *     DhcpConfigurations?: list<DhcpConfiguration>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
