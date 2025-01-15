<?php

namespace Sunaoka\Aws\Structures\ApiGateway\UpdateAccount;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $cloudwatchRoleArn
 * @property Shapes\ThrottleSettings|null $throttleSettings
 * @property list<string>|null $features
 * @property string|null $apiKeyVersion
 */
class UpdateAccountResponse extends Response
{
}
