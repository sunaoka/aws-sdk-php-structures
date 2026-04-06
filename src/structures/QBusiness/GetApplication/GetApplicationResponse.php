<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetApplication;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $displayName
 * @property string|null $applicationId
 * @property string|null $applicationArn
 * @property string|null $identityCenterApplicationArn
 * @property string|null $roleArn
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'FAILED'|'UPDATING'|null $status
 * @property string|null $description
 * @property Shapes\EncryptionConfiguration|null $encryptionConfiguration
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property Shapes\ErrorDetail|null $error
 * @property Shapes\AppliedAttachmentsConfiguration|null $attachmentsConfiguration
 * @property Shapes\QAppsConfiguration|null $qAppsConfiguration
 * @property Shapes\PersonalizationConfiguration|null $personalizationConfiguration
 */
class GetApplicationResponse extends Response
{
}
