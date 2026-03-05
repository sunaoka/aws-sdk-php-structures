<?php

namespace Sunaoka\Aws\Structures\ConnectHealth\CreateDomain;

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
 */
class CreateDomainResponse extends Response
{
}
