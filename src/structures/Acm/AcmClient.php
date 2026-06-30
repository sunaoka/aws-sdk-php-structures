<?php

namespace Sunaoka\Aws\Structures\Acm;

class AcmClient extends \Aws\Acm\AcmClient
{
    use AddTagsToCertificate\AddTagsToCertificateTrait;
    use CreateAcmeDomainValidation\CreateAcmeDomainValidationTrait;
    use CreateAcmeEndpoint\CreateAcmeEndpointTrait;
    use CreateAcmeExternalAccountBinding\CreateAcmeExternalAccountBindingTrait;
    use DeleteAcmeDomainValidation\DeleteAcmeDomainValidationTrait;
    use DeleteAcmeEndpoint\DeleteAcmeEndpointTrait;
    use DeleteAcmeExternalAccountBinding\DeleteAcmeExternalAccountBindingTrait;
    use DeleteCertificate\DeleteCertificateTrait;
    use DescribeAcmeAccount\DescribeAcmeAccountTrait;
    use DescribeAcmeDomainValidation\DescribeAcmeDomainValidationTrait;
    use DescribeAcmeEndpoint\DescribeAcmeEndpointTrait;
    use DescribeAcmeExternalAccountBinding\DescribeAcmeExternalAccountBindingTrait;
    use DescribeCertificate\DescribeCertificateTrait;
    use ExportCertificate\ExportCertificateTrait;
    use GetAccountConfiguration\GetAccountConfigurationTrait;
    use GetAcmeExternalAccountBindingCredentials\GetAcmeExternalAccountBindingCredentialsTrait;
    use GetCertificate\GetCertificateTrait;
    use ImportCertificate\ImportCertificateTrait;
    use ListAcmeAccounts\ListAcmeAccountsTrait;
    use ListAcmeDomainValidations\ListAcmeDomainValidationsTrait;
    use ListAcmeEndpoints\ListAcmeEndpointsTrait;
    use ListAcmeExternalAccountBindings\ListAcmeExternalAccountBindingsTrait;
    use ListCertificates\ListCertificatesTrait;
    use ListTagsForCertificate\ListTagsForCertificateTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use PutAccountConfiguration\PutAccountConfigurationTrait;
    use RemoveTagsFromCertificate\RemoveTagsFromCertificateTrait;
    use RenewCertificate\RenewCertificateTrait;
    use RequestCertificate\RequestCertificateTrait;
    use ResendValidationEmail\ResendValidationEmailTrait;
    use RevokeAcmeAccount\RevokeAcmeAccountTrait;
    use RevokeAcmeExternalAccountBinding\RevokeAcmeExternalAccountBindingTrait;
    use RevokeCertificate\RevokeCertificateTrait;
    use SearchCertificates\SearchCertificatesTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateAcmeDomainValidation\UpdateAcmeDomainValidationTrait;
    use UpdateAcmeEndpoint\UpdateAcmeEndpointTrait;
    use UpdateCertificateOptions\UpdateCertificateOptionsTrait;
}
