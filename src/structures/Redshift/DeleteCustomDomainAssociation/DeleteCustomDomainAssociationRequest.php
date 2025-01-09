<?php

namespace Sunaoka\Aws\Structures\Redshift\DeleteCustomDomainAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterIdentifier
 * @property string $CustomDomainName
 */
class DeleteCustomDomainAssociationRequest extends Request
{
    /**
     * @param array{
     *     ClusterIdentifier: string,
     *     CustomDomainName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
