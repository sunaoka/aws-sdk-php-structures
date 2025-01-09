<?php

namespace Sunaoka\Aws\Structures\QBusiness\UpdateWebExperience;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $webExperienceId
 * @property string $roleArn
 * @property Shapes\WebExperienceAuthConfiguration $authenticationConfiguration
 * @property string $title
 * @property string $subtitle
 * @property string $welcomeMessage
 * @property 'ENABLED'|'DISABLED' $samplePromptsControlMode
 * @property Shapes\IdentityProviderConfiguration $identityProviderConfiguration
 * @property list<string> $origins
 * @property Shapes\BrowserExtensionConfiguration $browserExtensionConfiguration
 * @property Shapes\CustomizationConfiguration $customizationConfiguration
 */
class UpdateWebExperienceRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     webExperienceId: string,
     *     roleArn?: string,
     *     authenticationConfiguration?: Shapes\WebExperienceAuthConfiguration,
     *     title?: string,
     *     subtitle?: string,
     *     welcomeMessage?: string,
     *     samplePromptsControlMode?: 'ENABLED'|'DISABLED',
     *     identityProviderConfiguration?: Shapes\IdentityProviderConfiguration,
     *     origins?: list<string>,
     *     browserExtensionConfiguration?: Shapes\BrowserExtensionConfiguration,
     *     customizationConfiguration?: Shapes\CustomizationConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
