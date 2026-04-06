<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetConfigurationPolicy;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property string|null $Id
 * @property string|null $Name
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property Shapes\Policy|null $ConfigurationPolicy
 */
class GetConfigurationPolicyResponse extends Response
{
}
