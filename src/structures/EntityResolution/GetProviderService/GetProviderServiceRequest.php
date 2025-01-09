<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GetProviderService;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $providerName
 * @property string $providerServiceName
 */
class GetProviderServiceRequest extends Request
{
    /**
     * @param array{
     *     providerName: string,
     *     providerServiceName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
