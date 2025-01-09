<?php

namespace Sunaoka\Aws\Structures\Redshift\CreateCustomDomainAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CustomDomainName
 * @property string $CustomDomainCertificateArn
 * @property string $ClusterIdentifier
 */
class CreateCustomDomainAssociationRequest extends Request
{
    /**
     * @param array{
     *     CustomDomainName: string,
     *     CustomDomainCertificateArn: string,
     *     ClusterIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
