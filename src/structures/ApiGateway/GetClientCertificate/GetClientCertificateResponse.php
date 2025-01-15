<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetClientCertificate;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $clientCertificateId
 * @property string|null $description
 * @property string|null $pemEncodedCertificate
 * @property \Aws\Api\DateTimeResult|null $createdDate
 * @property \Aws\Api\DateTimeResult|null $expirationDate
 * @property array<string, string>|null $tags
 */
class GetClientCertificateResponse extends Response
{
}
