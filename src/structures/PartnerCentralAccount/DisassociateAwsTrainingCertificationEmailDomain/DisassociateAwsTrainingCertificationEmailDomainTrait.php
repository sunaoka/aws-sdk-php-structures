<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\DisassociateAwsTrainingCertificationEmailDomain;

trait DisassociateAwsTrainingCertificationEmailDomainTrait
{
    /**
     * @param DisassociateAwsTrainingCertificationEmailDomainRequest $args
     * @return DisassociateAwsTrainingCertificationEmailDomainResponse
     */
    public function disassociateAwsTrainingCertificationEmailDomain(DisassociateAwsTrainingCertificationEmailDomainRequest $args)
    {
        $result = parent::disassociateAwsTrainingCertificationEmailDomain($args->toArray());
        return new DisassociateAwsTrainingCertificationEmailDomainResponse($result->toArray());
    }
}
