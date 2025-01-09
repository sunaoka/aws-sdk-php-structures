<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\PublishAppVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appArn
 * @property string $versionName
 */
class PublishAppVersionRequest extends Request
{
    /**
     * @param array{
     *     appArn: string,
     *     versionName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
