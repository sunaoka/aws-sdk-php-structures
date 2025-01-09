<?php

namespace Sunaoka\Aws\Structures\Schemas\UpdateDiscoverer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Description
 * @property string $DiscovererId
 * @property bool $CrossAccount
 */
class UpdateDiscovererRequest extends Request
{
    /**
     * @param array{
     *     Description?: string,
     *     DiscovererId: string,
     *     CrossAccount?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
