<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\AssociateAwsTrainingCertificationEmailDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property string $Identifier
 * @property string|null $ClientToken
 * @property string $Email
 * @property string $EmailVerificationCode
 */
class AssociateAwsTrainingCertificationEmailDomainRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     Identifier: string,
     *     ClientToken?: string|null,
     *     Email: string,
     *     EmailVerificationCode: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
