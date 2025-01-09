<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeCertificateProvider;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $certificateProviderName
 * @property string $certificateProviderArn
 * @property string $lambdaFunctionArn
 * @property list<'CreateCertificateFromCsr'> $accountDefaultForOperations
 * @property \Aws\Api\DateTimeResult $creationDate
 * @property \Aws\Api\DateTimeResult $lastModifiedDate
 */
class DescribeCertificateProviderResponse extends Response
{
}
