<?php

namespace Sunaoka\Aws\Structures\WorkMail\UpdateDefaultMailDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property string $DomainName
 */
class UpdateDefaultMailDomainRequest extends Request
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
