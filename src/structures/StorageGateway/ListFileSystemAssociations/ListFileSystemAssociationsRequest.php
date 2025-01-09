<?php

namespace Sunaoka\Aws\Structures\StorageGateway\ListFileSystemAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GatewayARN
 * @property int<1, max> $Limit
 * @property string $Marker
 */
class ListFileSystemAssociationsRequest extends Request
{
    /**
     * @param array{
     *     GatewayARN?: string,
     *     Limit?: int<1, max>,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
