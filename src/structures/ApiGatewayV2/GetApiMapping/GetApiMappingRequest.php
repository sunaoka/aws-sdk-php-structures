<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetApiMapping;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApiMappingId
 * @property string $DomainName
 */
class GetApiMappingRequest extends Request
{
    /**
     * @param array{
     *     ApiMappingId: string,
     *     DomainName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
