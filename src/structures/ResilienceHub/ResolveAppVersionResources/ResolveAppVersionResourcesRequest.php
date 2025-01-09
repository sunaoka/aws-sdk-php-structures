<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ResolveAppVersionResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appArn
 * @property string $appVersion
 */
class ResolveAppVersionResourcesRequest extends Request
{
    /**
     * @param array{
     *     appArn: string,
     *     appVersion: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
