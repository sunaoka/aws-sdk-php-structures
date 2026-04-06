<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateDhcpOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $OwnerId
 * @property list<Tag>|null $Tags
 * @property string|null $DhcpOptionsId
 * @property list<DhcpConfiguration>|null $DhcpConfigurations
 */
class DhcpOptions extends Shape
{
    /**
     * @param array{
     *     OwnerId?: string|null,
     *     Tags?: list<Tag>|null,
     *     DhcpOptionsId?: string|null,
     *     DhcpConfigurations?: list<DhcpConfiguration>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
