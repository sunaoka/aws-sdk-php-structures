<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeDhcpOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DhcpConfiguration>|null $DhcpConfigurations
 * @property string|null $DhcpOptionsId
 * @property string|null $OwnerId
 * @property list<Tag>|null $Tags
 */
class DhcpOptions extends Shape
{
    /**
     * @param array{
     *     DhcpConfigurations?: list<DhcpConfiguration>|null,
     *     DhcpOptionsId?: string|null,
     *     OwnerId?: string|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
