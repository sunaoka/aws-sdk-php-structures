<?php

namespace Sunaoka\Aws\Structures\CloudTrail\EnableFederation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $EventDataStoreArn
 * @property 'ENABLING'|'ENABLED'|'DISABLING'|'DISABLED' $FederationStatus
 * @property string $FederationRoleArn
 */
class EnableFederationResponse extends Response
{
}
