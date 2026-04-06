<?php

namespace Sunaoka\Aws\Structures\Glue\GetUsageProfile;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Name
 * @property string|null $Description
 * @property Shapes\ProfileConfiguration|null $Configuration
 * @property \Aws\Api\DateTimeResult|null $CreatedOn
 * @property \Aws\Api\DateTimeResult|null $LastModifiedOn
 */
class GetUsageProfileResponse extends Response
{
}
