<?php

namespace Sunaoka\Aws\Structures\QBusiness\CreateWebExperience;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string|null $title
 * @property string|null $subtitle
 * @property string|null $welcomeMessage
 * @property 'ENABLED'|'DISABLED'|null $samplePromptsControlMode
 * @property list<string>|null $origins
 * @property string|null $roleArn
 * @property list<Shapes\Tag>|null $tags
 * @property string|null $clientToken
 * @property Shapes\IdentityProviderConfiguration|null $identityProviderConfiguration
 * @property Shapes\BrowserExtensionConfiguration|null $browserExtensionConfiguration
 * @property Shapes\CustomizationConfiguration|null $customizationConfiguration
 */
class CreateWebExperienceRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     title?: string|null,
     *     subtitle?: string|null,
     *     welcomeMessage?: string|null,
     *     samplePromptsControlMode?: 'ENABLED'|'DISABLED'|null,
     *     origins?: list<string>|null,
     *     roleArn?: string|null,
     *     tags?: list<Shapes\Tag>|null,
     *     clientToken?: string|null,
     *     identityProviderConfiguration?: Shapes\IdentityProviderConfiguration|null,
     *     browserExtensionConfiguration?: Shapes\BrowserExtensionConfiguration|null,
     *     customizationConfiguration?: Shapes\CustomizationConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
