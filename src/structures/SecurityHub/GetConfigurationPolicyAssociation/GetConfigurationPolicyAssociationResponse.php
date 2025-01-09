<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetConfigurationPolicyAssociation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ConfigurationPolicyId
 * @property string $TargetId
 * @property 'ACCOUNT'|'ORGANIZATIONAL_UNIT'|'ROOT' $TargetType
 * @property 'INHERITED'|'APPLIED' $AssociationType
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 * @property 'PENDING'|'SUCCESS'|'FAILED' $AssociationStatus
 * @property string $AssociationStatusMessage
 */
class GetConfigurationPolicyAssociationResponse extends Response
{
}
