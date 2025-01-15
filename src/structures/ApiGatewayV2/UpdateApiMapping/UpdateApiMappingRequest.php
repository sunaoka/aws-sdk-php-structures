<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\UpdateApiMapping;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApiId
 * @property string $ApiMappingId
 * @property string|null $ApiMappingKey
 * @property string $DomainName
 * @property string|null $Stage
 */
class UpdateApiMappingRequest extends Request
{
    /**
     * @param array{
     *     ApiId: string,
     *     ApiMappingId: string,
     *     ApiMappingKey?: string|null,
     *     DomainName: string,
     *     Stage?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
