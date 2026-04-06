<?php

namespace Sunaoka\Aws\Structures\ApiGateway\CreateBasePathMapping;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainName
 * @property string|null $domainNameId
 * @property string|null $basePath
 * @property string $restApiId
 * @property string|null $stage
 */
class CreateBasePathMappingRequest extends Request
{
    /**
     * @param array{
     *     domainName: string,
     *     domainNameId?: string|null,
     *     basePath?: string|null,
     *     restApiId: string,
     *     stage?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
