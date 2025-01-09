<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\UpdateDataAutomationProject;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $projectArn
 * @property 'DEVELOPMENT'|'LIVE' $projectStage
 * @property 'COMPLETED'|'IN_PROGRESS'|'FAILED' $status
 */
class UpdateDataAutomationProjectResponse extends Response
{
}
