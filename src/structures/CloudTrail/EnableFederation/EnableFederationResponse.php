<?php

namespace Sunaoka\Aws\Structures\CloudTrail\EnableFederation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $EventDataStoreArn
 * @property 'ENABLING'|'ENABLED'|'DISABLING'|'DISABLED'|null $FederationStatus
 * @property string|null $FederationRoleArn
 */
class EnableFederationResponse extends Response
{
}
