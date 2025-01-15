<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetDomainName;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainName
 * @property string|null $domainNameId
 */
class GetDomainNameRequest extends Request
{
    /**
     * @param array{
     *     domainName: string,
     *     domainNameId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
