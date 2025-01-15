<?php

namespace Sunaoka\Aws\Structures\ApiGateway\UpdateClientCertificate;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $clientCertificateId
 * @property string|null $description
 * @property string|null $pemEncodedCertificate
 * @property \Aws\Api\DateTimeResult|null $createdDate
 * @property \Aws\Api\DateTimeResult|null $expirationDate
 * @property array<string, string>|null $tags
 */
class UpdateClientCertificateResponse extends Response
{
}
