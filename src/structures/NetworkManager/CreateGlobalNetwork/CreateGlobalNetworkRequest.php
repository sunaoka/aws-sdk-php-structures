<?php

namespace Sunaoka\Aws\Structures\NetworkManager\CreateGlobalNetwork;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Description
 * @property list<Shapes\Tag> $Tags
 */
class CreateGlobalNetworkRequest extends Request
{
    /**
     * @param array{
     *     Description?: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
