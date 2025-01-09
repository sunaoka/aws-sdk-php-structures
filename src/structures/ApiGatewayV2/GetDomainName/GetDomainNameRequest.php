<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetDomainName;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 */
class GetDomainNameRequest extends Request
{
    /**
     * @param array{DomainName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
