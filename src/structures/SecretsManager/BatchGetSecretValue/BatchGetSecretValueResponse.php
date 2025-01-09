<?php

namespace Sunaoka\Aws\Structures\SecretsManager\BatchGetSecretValue;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\SecretValueEntry> $SecretValues
 * @property string $NextToken
 * @property list<Shapes\APIErrorType> $Errors
 */
class BatchGetSecretValueResponse extends Response
{
}
