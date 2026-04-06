<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\UpdateDataAutomationProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $projectArn
 * @property 'DEVELOPMENT'|'LIVE'|null $projectStage
 * @property string|null $projectDescription
 * @property Shapes\StandardOutputConfiguration $standardOutputConfiguration
 * @property Shapes\CustomOutputConfiguration|null $customOutputConfiguration
 * @property Shapes\OverrideConfiguration|null $overrideConfiguration
 */
class UpdateDataAutomationProjectRequest extends Request
{
    /**
     * @param array{
     *     projectArn: string,
     *     projectStage?: 'DEVELOPMENT'|'LIVE'|null,
     *     projectDescription?: string|null,
     *     standardOutputConfiguration: Shapes\StandardOutputConfiguration,
     *     customOutputConfiguration?: Shapes\CustomOutputConfiguration|null,
     *     overrideConfiguration?: Shapes\OverrideConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
