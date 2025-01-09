<?php

namespace Sunaoka\Aws\Structures\WorkMail\RegisterMailDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientToken
 * @property string $OrganizationId
 * @property string $DomainName
 */
class RegisterMailDomainRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string,
     *     OrganizationId: string,
     *     DomainName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
