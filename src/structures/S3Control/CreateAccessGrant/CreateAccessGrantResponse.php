<?php

namespace Sunaoka\Aws\Structures\S3Control\CreateAccessGrant;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property string $AccessGrantId
 * @property string $AccessGrantArn
 * @property Shapes\Grantee $Grantee
 * @property string $AccessGrantsLocationId
 * @property Shapes\AccessGrantsLocationConfiguration $AccessGrantsLocationConfiguration
 * @property 'READ'|'WRITE'|'READWRITE' $Permission
 * @property string $ApplicationArn
 * @property string $GrantScope
 */
class CreateAccessGrantResponse extends Response
{
}
