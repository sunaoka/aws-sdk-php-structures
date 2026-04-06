<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DescribeVirtualInterfaces;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $connectionId
 * @property string|null $virtualInterfaceId
 */
class DescribeVirtualInterfacesRequest extends Request
{
    /**
     * @param array{
     *     connectionId?: string|null,
     *     virtualInterfaceId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
