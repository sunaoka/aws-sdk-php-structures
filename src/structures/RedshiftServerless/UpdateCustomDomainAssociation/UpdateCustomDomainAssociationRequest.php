<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\UpdateCustomDomainAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $customDomainCertificateArn
 * @property string $customDomainName
 * @property string $workgroupName
 */
class UpdateCustomDomainAssociationRequest extends Request
{
    /**
     * @param array{
     *     customDomainCertificateArn: string,
     *     customDomainName: string,
     *     workgroupName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
