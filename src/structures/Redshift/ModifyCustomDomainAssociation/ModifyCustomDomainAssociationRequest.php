<?php

namespace Sunaoka\Aws\Structures\Redshift\ModifyCustomDomainAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $CustomDomainName
 * @property string|null $CustomDomainCertificateArn
 * @property string $ClusterIdentifier
 */
class ModifyCustomDomainAssociationRequest extends Request
{
    /**
     * @param array{
     *     CustomDomainName?: string|null,
     *     CustomDomainCertificateArn?: string|null,
     *     ClusterIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
