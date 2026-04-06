<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\CreateAccountAssociation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $OAuthAuthorizationUrl
 * @property string $AccountAssociationId
 * @property 'ASSOCIATION_IN_PROGRESS'|'ASSOCIATION_FAILED'|'ASSOCIATION_SUCCEEDED'|'ASSOCIATION_DELETING'|'REFRESH_TOKEN_EXPIRED' $AssociationState
 * @property string|null $Arn
 */
class CreateAccountAssociationResponse extends Response
{
}
