<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\DisassociateAwsTrainingCertificationEmailDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property string $Identifier
 * @property string|null $ClientToken
 * @property string $DomainName
 */
class DisassociateAwsTrainingCertificationEmailDomainRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     Identifier: string,
     *     ClientToken?: string|null,
     *     DomainName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
