<?php

namespace Sunaoka\Aws\Structures\S3Control\GetAccessGrant;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property string $AccessGrantId
 * @property string $AccessGrantArn
 * @property Shapes\Grantee $Grantee
 * @property 'READ'|'WRITE'|'READWRITE' $Permission
 * @property string $AccessGrantsLocationId
 * @property Shapes\AccessGrantsLocationConfiguration $AccessGrantsLocationConfiguration
 * @property string $GrantScope
 * @property string $ApplicationArn
 */
class GetAccessGrantResponse extends Response
{
}
