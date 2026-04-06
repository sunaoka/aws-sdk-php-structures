<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetConfigurationPolicyAssociation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ConfigurationPolicyId
 * @property string|null $TargetId
 * @property 'ACCOUNT'|'ORGANIZATIONAL_UNIT'|'ROOT'|null $TargetType
 * @property 'INHERITED'|'APPLIED'|null $AssociationType
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 * @property 'PENDING'|'SUCCESS'|'FAILED'|null $AssociationStatus
 * @property string|null $AssociationStatusMessage
 */
class GetConfigurationPolicyAssociationResponse extends Response
{
}
