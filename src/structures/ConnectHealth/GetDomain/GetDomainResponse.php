<?php

namespace Sunaoka\Aws\Structures\ConnectHealth\GetDomain;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $domainId
 * @property string $arn
 * @property string $name
 * @property string|null $kmsKeyArn
 * @property Shapes\EncryptionContext|null $encryptionContext
 * @property 'ACTIVE'|'DELETING'|'DELETED' $status
 * @property string|null $webAppUrl
 * @property Shapes\WebAppConfiguration|null $webAppConfiguration
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property array<string, string>|null $tags
 */
class GetDomainResponse extends Response
{
}
