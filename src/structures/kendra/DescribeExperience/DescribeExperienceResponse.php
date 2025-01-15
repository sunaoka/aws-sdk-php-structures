<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeExperience;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Id
 * @property string|null $IndexId
 * @property string|null $Name
 * @property list<Shapes\ExperienceEndpoint>|null $Endpoints
 * @property Shapes\ExperienceConfiguration|null $Configuration
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 * @property string|null $Description
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'FAILED'|null $Status
 * @property string|null $RoleArn
 * @property string|null $ErrorMessage
 */
class DescribeExperienceResponse extends Response
{
}
