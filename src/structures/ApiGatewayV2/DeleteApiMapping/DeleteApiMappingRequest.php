<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\DeleteApiMapping;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApiMappingId
 * @property string $DomainName
 */
class DeleteApiMappingRequest extends Request
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
