<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetApps;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PageSize
 * @property string $Token
 */
class GetAppsRequest extends Request
{
    /**
     * @param array{
     *     PageSize?: string,
     *     Token?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
