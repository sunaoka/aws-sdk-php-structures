<?php

namespace Sunaoka\Aws\Structures\SecretsManager\GetSecretValue;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ARN
 * @property string|null $Name
 * @property string|null $VersionId
 * @property \Psr\Http\Message\StreamInterface $SecretBinary
 * @property string|null $SecretString
 * @property list<string>|null $VersionStages
 * @property \Aws\Api\DateTimeResult|null $CreatedDate
 */
class GetSecretValueResponse extends Response
{
}
