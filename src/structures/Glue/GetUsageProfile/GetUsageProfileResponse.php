<?php

namespace Sunaoka\Aws\Structures\Glue\GetUsageProfile;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Name
 * @property string $Description
 * @property Shapes\ProfileConfiguration $Configuration
 * @property \Aws\Api\DateTimeResult $CreatedOn
 * @property \Aws\Api\DateTimeResult $LastModifiedOn
 */
class GetUsageProfileResponse extends Response
{
}
