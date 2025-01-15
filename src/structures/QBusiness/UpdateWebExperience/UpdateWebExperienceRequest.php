<?php

namespace Sunaoka\Aws\Structures\QBusiness\UpdateWebExperience;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $webExperienceId
 * @property string|null $roleArn
 * @property Shapes\WebExperienceAuthConfiguration|null $authenticationConfiguration
 * @property string|null $title
 * @property string|null $subtitle
 * @property string|null $welcomeMessage
 * @property 'ENABLED'|'DISABLED'|null $samplePromptsControlMode
 * @property Shapes\IdentityProviderConfiguration|null $identityProviderConfiguration
 * @property list<string>|null $origins
 * @property Shapes\BrowserExtensionConfiguration|null $browserExtensionConfiguration
 * @property Shapes\CustomizationConfiguration|null $customizationConfiguration
 */
class UpdateWebExperienceRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     webExperienceId: string,
     *     roleArn?: string|null,
     *     authenticationConfiguration?: Shapes\WebExperienceAuthConfiguration|null,
     *     title?: string|null,
     *     subtitle?: string|null,
     *     welcomeMessage?: string|null,
     *     samplePromptsControlMode?: 'ENABLED'|'DISABLED'|null,
     *     identityProviderConfiguration?: Shapes\IdentityProviderConfiguration|null,
     *     origins?: list<string>|null,
     *     browserExtensionConfiguration?: Shapes\BrowserExtensionConfiguration|null,
     *     customizationConfiguration?: Shapes\CustomizationConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
