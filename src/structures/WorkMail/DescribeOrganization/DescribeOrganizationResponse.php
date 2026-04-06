<?php

namespace Sunaoka\Aws\Structures\WorkMail\DescribeOrganization;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $OrganizationId
 * @property string|null $Alias
 * @property string|null $State
 * @property string|null $DirectoryId
 * @property string|null $DirectoryType
 * @property string|null $DefaultMailDomain
 * @property \Aws\Api\DateTimeResult|null $CompletedDate
 * @property string|null $ErrorMessage
 * @property string|null $ARN
 */
class DescribeOrganizationResponse extends Response
{
}
