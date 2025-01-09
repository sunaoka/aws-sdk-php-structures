<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetConfigurationPolicy;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property string $Id
 * @property string $Name
 * @property string $Description
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property Shapes\Policy $ConfigurationPolicy
 */
class GetConfigurationPolicyResponse extends Response
{
}
