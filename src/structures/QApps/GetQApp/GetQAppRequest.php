<?php

namespace Sunaoka\Aws\Structures\QApps\GetQApp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceId
 * @property string $appId
 * @property int<0, 2147483647>|null $appVersion
 */
class GetQAppRequest extends Request
{
    /**
     * @param array{
     *     instanceId: string,
     *     appId: string,
     *     appVersion?: int<0, 2147483647>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
