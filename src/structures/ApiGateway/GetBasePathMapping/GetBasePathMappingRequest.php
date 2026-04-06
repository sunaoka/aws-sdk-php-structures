<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetBasePathMapping;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainName
 * @property string $basePath
 */
class GetBasePathMappingRequest extends Request
{
    /**
     * @param array{
     *     domainName: string,
     *     basePath: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
