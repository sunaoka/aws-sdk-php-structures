<?php

namespace Sunaoka\Aws\Structures\SecretsManager\GetSecretValue;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ARN
 * @property string $Name
 * @property string $VersionId
 * @property \Psr\Http\Message\StreamInterface $SecretBinary
 * @property string $SecretString
 * @property list<string> $VersionStages
 * @property \Aws\Api\DateTimeResult $CreatedDate
 */
class GetSecretValueResponse extends Response
{
}
