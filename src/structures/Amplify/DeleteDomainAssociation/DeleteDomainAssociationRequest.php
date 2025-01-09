<?php

namespace Sunaoka\Aws\Structures\Amplify\DeleteDomainAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appId
 * @property string $domainName
 */
class DeleteDomainAssociationRequest extends Request
{
    /**
     * @param array{
     *     appId: string,
     *     domainName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
