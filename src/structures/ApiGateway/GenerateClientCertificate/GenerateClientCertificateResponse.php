<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GenerateClientCertificate;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $clientCertificateId
 * @property string $description
 * @property string $pemEncodedCertificate
 * @property \Aws\Api\DateTimeResult $createdDate
 * @property \Aws\Api\DateTimeResult $expirationDate
 * @property array<string, string> $tags
 */
class GenerateClientCertificateResponse extends Response
{
}
