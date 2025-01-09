<?php

namespace Sunaoka\Aws\Structures\WorkMail\DescribeOrganization;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $OrganizationId
 * @property string $Alias
 * @property string $State
 * @property string $DirectoryId
 * @property string $DirectoryType
 * @property string $DefaultMailDomain
 * @property \Aws\Api\DateTimeResult $CompletedDate
 * @property string $ErrorMessage
 * @property string $ARN
 * @property string $MigrationAdmin
 * @property bool $InteroperabilityEnabled
 */
class DescribeOrganizationResponse extends Response
{
}
