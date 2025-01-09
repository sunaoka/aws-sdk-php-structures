<?php

namespace Sunaoka\Aws\Structures\ApiGateway\DeleteBasePathMapping;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainName
 * @property string $domainNameId
 * @property string $basePath
 */
class DeleteBasePathMappingRequest extends Request
{
    /**
     * @param array{
     *     domainName: string,
     *     domainNameId?: string,
     *     basePath: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
