<?php

namespace Sunaoka\Aws\Structures\NetworkManager\CreateGlobalNetwork;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Description
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateGlobalNetworkRequest extends Request
{
    /**
     * @param array{
     *     Description?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
