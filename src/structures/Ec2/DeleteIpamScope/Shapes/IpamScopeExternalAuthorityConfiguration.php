<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteIpamScope\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'infoblox'|null $Type
 * @property string|null $ExternalResourceIdentifier
 */
class IpamScopeExternalAuthorityConfiguration extends Shape
{
    /**
     * @param array{
     *     Type?: 'infoblox'|null,
     *     ExternalResourceIdentifier?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
