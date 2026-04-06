<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\AssociateHostedZone;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string $resourceArn
 * @property string $hostedZoneId
 * @property string $hostedZoneName
 * @property string $name
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property 'CREATING'|'OPERATIONAL'|'DELETING' $status
 */
class AssociateHostedZoneResponse extends Response
{
}
