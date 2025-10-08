<?php

namespace Sunaoka\Aws\Structures\MPA\GetIdentitySource;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'IAM_IDENTITY_CENTER'|null $IdentitySourceType
 * @property Shapes\IdentitySourceParametersForGet|null $IdentitySourceParameters
 * @property string|null $IdentitySourceArn
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'ERROR'|null $Status
 * @property 'ACCESS_DENIED'|'DELETION_FAILED'|'IDC_INSTANCE_NOT_FOUND'|'IDC_INSTANCE_NOT_VALID'|null $StatusCode
 * @property string|null $StatusMessage
 */
class GetIdentitySourceResponse extends Response
{
}
