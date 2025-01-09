<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\CreateDataAutomationProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $projectName
 * @property string $projectDescription
 * @property 'DEVELOPMENT'|'LIVE' $projectStage
 * @property Shapes\StandardOutputConfiguration $standardOutputConfiguration
 * @property Shapes\CustomOutputConfiguration $customOutputConfiguration
 * @property Shapes\OverrideConfiguration $overrideConfiguration
 * @property string $clientToken
 * @property Shapes\EncryptionConfiguration $encryptionConfiguration
 */
class CreateDataAutomationProjectRequest extends Request
{
    /**
     * @param array{
     *     projectName: string,
     *     projectDescription?: string,
     *     projectStage?: 'DEVELOPMENT'|'LIVE',
     *     standardOutputConfiguration: Shapes\StandardOutputConfiguration,
     *     customOutputConfiguration?: Shapes\CustomOutputConfiguration,
     *     overrideConfiguration?: Shapes\OverrideConfiguration,
     *     clientToken?: string,
     *     encryptionConfiguration?: Shapes\EncryptionConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
