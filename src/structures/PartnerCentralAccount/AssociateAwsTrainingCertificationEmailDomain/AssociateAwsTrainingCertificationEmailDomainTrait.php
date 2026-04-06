<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\AssociateAwsTrainingCertificationEmailDomain;

trait AssociateAwsTrainingCertificationEmailDomainTrait
{
    /**
     * @param AssociateAwsTrainingCertificationEmailDomainRequest $args
     * @return AssociateAwsTrainingCertificationEmailDomainResponse
     */
    public function associateAwsTrainingCertificationEmailDomain(AssociateAwsTrainingCertificationEmailDomainRequest $args)
    {
        $result = parent::associateAwsTrainingCertificationEmailDomain($args->toArray());
        return new AssociateAwsTrainingCertificationEmailDomainResponse($result->toArray());
    }
}
