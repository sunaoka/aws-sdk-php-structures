<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\UpdateDataAutomationProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $projectArn
 * @property 'DEVELOPMENT'|'LIVE' $projectStage
 * @property string $projectDescription
 * @property Shapes\StandardOutputConfiguration $standardOutputConfiguration
 * @property Shapes\CustomOutputConfiguration $customOutputConfiguration
 * @property Shapes\OverrideConfiguration $overrideConfiguration
 */
class UpdateDataAutomationProjectRequest extends Request
{
    /**
     * @param array{
     *     projectArn: string,
     *     projectStage?: 'DEVELOPMENT'|'LIVE',
     *     projectDescription?: string,
     *     standardOutputConfiguration: Shapes\StandardOutputConfiguration,
     *     customOutputConfiguration?: Shapes\CustomOutputConfiguration,
     *     overrideConfiguration?: Shapes\OverrideConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
