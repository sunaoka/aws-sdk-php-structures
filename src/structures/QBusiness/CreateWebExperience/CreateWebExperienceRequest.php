<?php

namespace Sunaoka\Aws\Structures\QBusiness\CreateWebExperience;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $title
 * @property string $subtitle
 * @property string $welcomeMessage
 * @property 'ENABLED'|'DISABLED' $samplePromptsControlMode
 * @property list<string> $origins
 * @property string $roleArn
 * @property list<Shapes\Tag> $tags
 * @property string $clientToken
 * @property Shapes\IdentityProviderConfiguration $identityProviderConfiguration
 * @property Shapes\BrowserExtensionConfiguration $browserExtensionConfiguration
 * @property Shapes\CustomizationConfiguration $customizationConfiguration
 */
class CreateWebExperienceRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     title?: string,
     *     subtitle?: string,
     *     welcomeMessage?: string,
     *     samplePromptsControlMode?: 'ENABLED'|'DISABLED',
     *     origins?: list<string>,
     *     roleArn?: string,
     *     tags?: list<Shapes\Tag>,
     *     clientToken?: string,
     *     identityProviderConfiguration?: Shapes\IdentityProviderConfiguration,
     *     browserExtensionConfiguration?: Shapes\BrowserExtensionConfiguration,
     *     customizationConfiguration?: Shapes\CustomizationConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
