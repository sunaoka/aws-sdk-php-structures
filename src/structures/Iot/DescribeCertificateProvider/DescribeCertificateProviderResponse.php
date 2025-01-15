<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeCertificateProvider;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $certificateProviderName
 * @property string|null $certificateProviderArn
 * @property string|null $lambdaFunctionArn
 * @property list<'CreateCertificateFromCsr'>|null $accountDefaultForOperations
 * @property \Aws\Api\DateTimeResult|null $creationDate
 * @property \Aws\Api\DateTimeResult|null $lastModifiedDate
 */
class DescribeCertificateProviderResponse extends Response
{
}
