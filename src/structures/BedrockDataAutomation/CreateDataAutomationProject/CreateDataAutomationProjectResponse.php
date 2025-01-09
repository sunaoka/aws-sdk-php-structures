<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\CreateDataAutomationProject;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $projectArn
 * @property 'DEVELOPMENT'|'LIVE' $projectStage
 * @property 'COMPLETED'|'IN_PROGRESS'|'FAILED' $status
 */
class CreateDataAutomationProjectResponse extends Response
{
}
