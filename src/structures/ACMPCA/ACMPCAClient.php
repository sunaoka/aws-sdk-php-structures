<?php

namespace Sunaoka\Aws\Structures\ACMPCA;

class ACMPCAClient extends \Aws\ACMPCA\ACMPCAClient
{
    use CreateCertificateAuthority\CreateCertificateAuthorityTrait;
    use CreateCertificateAuthorityAuditReport\CreateCertificateAuthorityAuditReportTrait;
    use CreatePermission\CreatePermissionTrait;
    use DeleteCertificateAuthority\DeleteCertificateAuthorityTrait;
    use DeletePermission\DeletePermissionTrait;
    use DeletePolicy\DeletePolicyTrait;
    use DescribeCertificateAuthority\DescribeCertificateAuthorityTrait;
    use DescribeCertificateAuthorityAuditReport\DescribeCertificateAuthorityAuditReportTrait;
    use GetCertificate\GetCertificateTrait;
    use GetCertificateAuthorityCertificate\GetCertificateAuthorityCertificateTrait;
    use GetCertificateAuthorityCsr\GetCertificateAuthorityCsrTrait;
    use GetPolicy\GetPolicyTrait;
    use ImportCertificateAuthorityCertificate\ImportCertificateAuthorityCertificateTrait;
    use IssueCertificate\IssueCertificateTrait;
    use ListCertificateAuthorities\ListCertificateAuthoritiesTrait;
    use ListPermissions\ListPermissionsTrait;
    use ListTags\ListTagsTrait;
    use PutPolicy\PutPolicyTrait;
    use RestoreCertificateAuthority\RestoreCertificateAuthorityTrait;
    use RevokeCertificate\RevokeCertificateTrait;
    use TagCertificateAuthority\TagCertificateAuthorityTrait;
    use UntagCertificateAuthority\UntagCertificateAuthorityTrait;
    use UpdateCertificateAuthority\UpdateCertificateAuthorityTrait;
}
