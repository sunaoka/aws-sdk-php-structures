<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeExperience;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Id
 * @property string $IndexId
 * @property string $Name
 * @property list<Shapes\ExperienceEndpoint> $Endpoints
 * @property Shapes\ExperienceConfiguration $Configuration
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 * @property string $Description
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'FAILED' $Status
 * @property string $RoleArn
 * @property string $ErrorMessage
 */
class DescribeExperienceResponse extends Response
{
}
