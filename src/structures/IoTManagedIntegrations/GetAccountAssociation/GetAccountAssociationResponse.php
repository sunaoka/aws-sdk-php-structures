<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\GetAccountAssociation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $AccountAssociationId
 * @property 'ASSOCIATION_IN_PROGRESS'|'ASSOCIATION_FAILED'|'ASSOCIATION_SUCCEEDED'|'ASSOCIATION_DELETING'|'REFRESH_TOKEN_EXPIRED' $AssociationState
 * @property string|null $ErrorMessage
 * @property string|null $ConnectorDestinationId
 * @property string|null $Name
 * @property string|null $Description
 * @property string|null $Arn
 * @property string $OAuthAuthorizationUrl
 * @property array<string, string>|null $Tags
 * @property Shapes\GeneralAuthorizationName|null $GeneralAuthorization
 */
class GetAccountAssociationResponse extends Response
{
}
