<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\UpdateHostedZoneAssociation;

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
class UpdateHostedZoneAssociationResponse extends Response
{
}
