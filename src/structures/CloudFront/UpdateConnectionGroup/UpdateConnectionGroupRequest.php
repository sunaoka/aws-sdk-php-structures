<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateConnectionGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property bool|null $Ipv6Enabled
 * @property string $IfMatch
 * @property string|null $AnycastIpListId
 * @property bool|null $Enabled
 */
class UpdateConnectionGroupRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     Ipv6Enabled?: bool|null,
     *     IfMatch: string,
     *     AnycastIpListId?: string|null,
     *     Enabled?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
