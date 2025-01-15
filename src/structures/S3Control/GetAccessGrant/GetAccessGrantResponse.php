<?php

namespace Sunaoka\Aws\Structures\S3Control\GetAccessGrant;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property string|null $AccessGrantId
 * @property string|null $AccessGrantArn
 * @property Shapes\Grantee|null $Grantee
 * @property 'READ'|'WRITE'|'READWRITE'|null $Permission
 * @property string|null $AccessGrantsLocationId
 * @property Shapes\AccessGrantsLocationConfiguration|null $AccessGrantsLocationConfiguration
 * @property string|null $GrantScope
 * @property string|null $ApplicationArn
 */
class GetAccessGrantResponse extends Response
{
}
