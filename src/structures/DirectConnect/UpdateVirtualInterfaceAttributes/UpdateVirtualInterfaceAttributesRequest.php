<?php

namespace Sunaoka\Aws\Structures\DirectConnect\UpdateVirtualInterfaceAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $virtualInterfaceId
 * @property int|null $mtu
 * @property bool|null $enableSiteLink
 * @property string|null $virtualInterfaceName
 */
class UpdateVirtualInterfaceAttributesRequest extends Request
{
    /**
     * @param array{
     *     virtualInterfaceId: string,
     *     mtu?: int|null,
     *     enableSiteLink?: bool|null,
     *     virtualInterfaceName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
