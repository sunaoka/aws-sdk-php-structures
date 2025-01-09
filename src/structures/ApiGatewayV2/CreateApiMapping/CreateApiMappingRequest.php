<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\CreateApiMapping;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApiId
 * @property string $ApiMappingKey
 * @property string $DomainName
 * @property string $Stage
 */
class CreateApiMappingRequest extends Request
{
    /**
     * @param array{
     *     ApiId: string,
     *     ApiMappingKey?: string,
     *     DomainName: string,
     *     Stage: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
