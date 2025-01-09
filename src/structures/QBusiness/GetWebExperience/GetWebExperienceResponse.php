<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetWebExperience;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $applicationId
 * @property string $webExperienceId
 * @property string $webExperienceArn
 * @property string $defaultEndpoint
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'FAILED'|'PENDING_AUTH_CONFIG' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $title
 * @property string $subtitle
 * @property string $welcomeMessage
 * @property 'ENABLED'|'DISABLED' $samplePromptsControlMode
 * @property list<string> $origins
 * @property string $roleArn
 * @property Shapes\IdentityProviderConfiguration $identityProviderConfiguration
 * @property Shapes\WebExperienceAuthConfiguration $authenticationConfiguration
 * @property Shapes\ErrorDetail $error
 * @property Shapes\BrowserExtensionConfiguration $browserExtensionConfiguration
 * @property Shapes\CustomizationConfiguration $customizationConfiguration
 */
class GetWebExperienceResponse extends Response
{
}
