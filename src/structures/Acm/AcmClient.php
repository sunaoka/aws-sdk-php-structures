<?php

namespace Sunaoka\Aws\Structures\Acm;

class AcmClient extends \Aws\Acm\AcmClient
{
    use AddTagsToCertificate\AddTagsToCertificateTrait;
    use DeleteCertificate\DeleteCertificateTrait;
    use DescribeCertificate\DescribeCertificateTrait;
    use ExportCertificate\ExportCertificateTrait;
    use GetAccountConfiguration\GetAccountConfigurationTrait;
    use GetCertificate\GetCertificateTrait;
    use ImportCertificate\ImportCertificateTrait;
    use ListCertificates\ListCertificatesTrait;
    use ListTagsForCertificate\ListTagsForCertificateTrait;
    use PutAccountConfiguration\PutAccountConfigurationTrait;
    use RemoveTagsFromCertificate\RemoveTagsFromCertificateTrait;
    use RenewCertificate\RenewCertificateTrait;
    use RequestCertificate\RequestCertificateTrait;
    use ResendValidationEmail\ResendValidationEmailTrait;
    use RevokeCertificate\RevokeCertificateTrait;
    use UpdateCertificateOptions\UpdateCertificateOptionsTrait;
}
