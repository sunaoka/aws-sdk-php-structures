<?php

namespace Sunaoka\Aws\Structures\Glacier\ListVaults;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accountId
 * @property string|null $marker
 * @property string|null $limit
 */
class ListVaultsRequest extends Request
{
    /**
     * @param array{
     *     accountId: string,
     *     marker?: string|null,
     *     limit?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
