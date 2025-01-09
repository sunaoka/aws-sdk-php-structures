<?php

namespace Sunaoka\Aws\Structures\ApiGateway\CreateBasePathMapping;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainName
 * @property string $domainNameId
 * @property string $basePath
 * @property string $restApiId
 * @property string $stage
 */
class CreateBasePathMappingRequest extends Request
{
    /**
     * @param array{
     *     domainName: string,
     *     domainNameId?: string,
     *     basePath?: string,
     *     restApiId: string,
     *     stage?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
