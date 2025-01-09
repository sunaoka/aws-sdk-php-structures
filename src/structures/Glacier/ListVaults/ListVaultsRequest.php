<?php

namespace Sunaoka\Aws\Structures\Glacier\ListVaults;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accountId
 * @property string $marker
 * @property string $limit
 */
class ListVaultsRequest extends Request
{
    /**
     * @param array{
     *     accountId: string,
     *     marker?: string,
     *     limit?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
