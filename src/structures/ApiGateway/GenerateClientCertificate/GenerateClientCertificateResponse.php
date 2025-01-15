<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GenerateClientCertificate;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $clientCertificateId
 * @property string|null $description
 * @property string|null $pemEncodedCertificate
 * @property \Aws\Api\DateTimeResult|null $createdDate
 * @property \Aws\Api\DateTimeResult|null $expirationDate
 * @property array<string, string>|null $tags
 */
class GenerateClientCertificateResponse extends Response
{
}
