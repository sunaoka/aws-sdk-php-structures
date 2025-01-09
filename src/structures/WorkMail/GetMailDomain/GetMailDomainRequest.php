<?php

namespace Sunaoka\Aws\Structures\WorkMail\GetMailDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property string $DomainName
 */
class GetMailDomainRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     DomainName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
