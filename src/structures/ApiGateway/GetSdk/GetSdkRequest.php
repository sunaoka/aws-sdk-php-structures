<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetSdk;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $restApiId
 * @property string $stageName
 * @property string $sdkType
 * @property array<string, string> $parameters
 */
class GetSdkRequest extends Request
{
    /**
     * @param array{
     *     restApiId: string,
     *     stageName: string,
     *     sdkType: string,
     *     parameters?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
