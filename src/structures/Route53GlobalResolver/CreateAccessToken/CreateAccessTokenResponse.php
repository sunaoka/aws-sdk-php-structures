<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\CreateAccessToken;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string $arn
 * @property string|null $clientToken
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $dnsViewId
 * @property \Aws\Api\DateTimeResult $expiresAt
 * @property string|null $name
 * @property 'CREATING'|'OPERATIONAL'|'DELETING' $status
 * @property string $value
 */
class CreateAccessTokenResponse extends Response
{
}
