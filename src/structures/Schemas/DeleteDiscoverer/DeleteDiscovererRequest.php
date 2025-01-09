<?php

namespace Sunaoka\Aws\Structures\Schemas\DeleteDiscoverer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DiscovererId
 */
class DeleteDiscovererRequest extends Request
{
    /**
     * @param array{DiscovererId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
