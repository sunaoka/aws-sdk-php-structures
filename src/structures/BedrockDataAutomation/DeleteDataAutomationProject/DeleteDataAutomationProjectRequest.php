<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\DeleteDataAutomationProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $projectArn
 */
class DeleteDataAutomationProjectRequest extends Request
{
    /**
     * @param array{projectArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
