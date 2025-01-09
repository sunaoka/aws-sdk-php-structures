<?php

namespace Sunaoka\Aws\Structures\ApiGateway\FlushStageAuthorizersCache;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $restApiId
 * @property string $stageName
 */
class FlushStageAuthorizersCacheRequest extends Request
{
    /**
     * @param array{
     *     restApiId: string,
     *     stageName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
