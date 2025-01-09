<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\DeleteDomainName;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 */
class DeleteDomainNameRequest extends Request
{
    /**
     * @param array{DomainName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
