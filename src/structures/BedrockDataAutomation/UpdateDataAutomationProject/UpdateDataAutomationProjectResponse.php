<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\UpdateDataAutomationProject;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $projectArn
 * @property 'DEVELOPMENT'|'LIVE'|null $projectStage
 * @property 'COMPLETED'|'IN_PROGRESS'|'FAILED'|null $status
 */
class UpdateDataAutomationProjectResponse extends Response
{
}
