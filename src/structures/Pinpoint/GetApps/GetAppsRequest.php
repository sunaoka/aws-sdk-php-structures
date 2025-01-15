<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetApps;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $PageSize
 * @property string|null $Token
 */
class GetAppsRequest extends Request
{
    /**
     * @param array{
     *     PageSize?: string|null,
     *     Token?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
