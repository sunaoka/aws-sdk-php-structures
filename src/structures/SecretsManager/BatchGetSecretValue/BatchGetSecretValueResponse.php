<?php

namespace Sunaoka\Aws\Structures\SecretsManager\BatchGetSecretValue;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\SecretValueEntry>|null $SecretValues
 * @property string|null $NextToken
 * @property list<Shapes\APIErrorType>|null $Errors
 */
class BatchGetSecretValueResponse extends Response
{
}
