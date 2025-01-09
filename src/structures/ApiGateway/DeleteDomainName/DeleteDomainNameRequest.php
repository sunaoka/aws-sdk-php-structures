<?php

namespace Sunaoka\Aws\Structures\ApiGateway\DeleteDomainName;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainName
 * @property string $domainNameId
 */
class DeleteDomainNameRequest extends Request
{
    /**
     * @param array{
     *     domainName: string,
     *     domainNameId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
