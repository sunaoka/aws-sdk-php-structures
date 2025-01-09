<?php

namespace Sunaoka\Aws\Structures\DirectConnect\UpdateVirtualInterfaceAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $virtualInterfaceId
 * @property int $mtu
 * @property bool $enableSiteLink
 * @property string $virtualInterfaceName
 */
class UpdateVirtualInterfaceAttributesRequest extends Request
{
    /**
     * @param array{
     *     virtualInterfaceId: string,
     *     mtu?: int,
     *     enableSiteLink?: bool,
     *     virtualInterfaceName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
