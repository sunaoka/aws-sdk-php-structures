<?php

namespace Sunaoka\Aws\Structures\Amplify\GetDomainAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appId
 * @property string $domainName
 */
class GetDomainAssociationRequest extends Request
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
