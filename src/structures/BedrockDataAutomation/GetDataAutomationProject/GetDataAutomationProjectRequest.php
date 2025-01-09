<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\GetDataAutomationProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $projectArn
 * @property 'DEVELOPMENT'|'LIVE' $projectStage
 */
class GetDataAutomationProjectRequest extends Request
{
    /**
     * @param array{
     *     projectArn: string,
     *     projectStage?: 'DEVELOPMENT'|'LIVE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
