<?php

namespace Sunaoka\Aws\Structures\Odb\DeleteOdbNetwork;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $odbNetworkId
 * @property bool $deleteAssociatedResources
 */
class DeleteOdbNetworkRequest extends Request
{
    /**
     * @param array{
     *     odbNetworkId: string,
     *     deleteAssociatedResources: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
