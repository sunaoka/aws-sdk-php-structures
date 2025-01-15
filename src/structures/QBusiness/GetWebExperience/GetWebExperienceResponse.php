<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetWebExperience;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $applicationId
 * @property string|null $webExperienceId
 * @property string|null $webExperienceArn
 * @property string|null $defaultEndpoint
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'FAILED'|'PENDING_AUTH_CONFIG'|null $status
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $title
 * @property string|null $subtitle
 * @property string|null $welcomeMessage
 * @property 'ENABLED'|'DISABLED'|null $samplePromptsControlMode
 * @property list<string>|null $origins
 * @property string|null $roleArn
 * @property Shapes\IdentityProviderConfiguration|null $identityProviderConfiguration
 * @property Shapes\WebExperienceAuthConfiguration|null $authenticationConfiguration
 * @property Shapes\ErrorDetail|null $error
 * @property Shapes\BrowserExtensionConfiguration|null $browserExtensionConfiguration
 * @property Shapes\CustomizationConfiguration|null $customizationConfiguration
 */
class GetWebExperienceResponse extends Response
{
}
