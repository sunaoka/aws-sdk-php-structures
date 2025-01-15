<?php

namespace Sunaoka\Aws\Structures\Schemas\UpdateDiscoverer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Description
 * @property string $DiscovererId
 * @property bool|null $CrossAccount
 */
class UpdateDiscovererRequest extends Request
{
    /**
     * @param array{
     *     Description?: string|null,
     *     DiscovererId: string,
     *     CrossAccount?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
