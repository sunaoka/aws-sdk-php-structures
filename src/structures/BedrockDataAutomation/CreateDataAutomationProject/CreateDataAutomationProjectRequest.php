<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\CreateDataAutomationProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $projectName
 * @property string|null $projectDescription
 * @property 'DEVELOPMENT'|'LIVE'|null $projectStage
 * @property 'ASYNC'|'SYNC'|null $projectType
 * @property Shapes\StandardOutputConfiguration $standardOutputConfiguration
 * @property Shapes\CustomOutputConfiguration|null $customOutputConfiguration
 * @property Shapes\OverrideConfiguration|null $overrideConfiguration
 * @property string|null $clientToken
 * @property Shapes\EncryptionConfiguration|null $encryptionConfiguration
 * @property list<Shapes\Tag>|null $tags
 */
class CreateDataAutomationProjectRequest extends Request
{
    /**
     * @param array{
     *     projectName: string,
     *     projectDescription?: string|null,
     *     projectStage?: 'DEVELOPMENT'|'LIVE'|null,
     *     projectType?: 'ASYNC'|'SYNC'|null,
     *     standardOutputConfiguration: Shapes\StandardOutputConfiguration,
     *     customOutputConfiguration?: Shapes\CustomOutputConfiguration|null,
     *     overrideConfiguration?: Shapes\OverrideConfiguration|null,
     *     clientToken?: string|null,
     *     encryptionConfiguration?: Shapes\EncryptionConfiguration|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
