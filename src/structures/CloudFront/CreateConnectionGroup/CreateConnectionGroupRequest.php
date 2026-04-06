<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateConnectionGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property bool|null $Ipv6Enabled
 * @property Shapes\Tags|null $Tags
 * @property string|null $AnycastIpListId
 * @property bool|null $Enabled
 */
class CreateConnectionGroupRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Ipv6Enabled?: bool|null,
     *     Tags?: Shapes\Tags|null,
     *     AnycastIpListId?: string|null,
     *     Enabled?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
