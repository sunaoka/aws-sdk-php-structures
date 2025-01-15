<?php

namespace Sunaoka\Aws\Structures\S3Control\CreateAccessGrant;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property string|null $AccessGrantId
 * @property string|null $AccessGrantArn
 * @property Shapes\Grantee|null $Grantee
 * @property string|null $AccessGrantsLocationId
 * @property Shapes\AccessGrantsLocationConfiguration|null $AccessGrantsLocationConfiguration
 * @property 'READ'|'WRITE'|'READWRITE'|null $Permission
 * @property string|null $ApplicationArn
 * @property string|null $GrantScope
 */
class CreateAccessGrantResponse extends Response
{
}
