<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeContainerAssociation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ContainerAssociationName
 * @property string|null $ContainerAssociationArn
 * @property string|null $Description
 * @property 'ECS'|'EKS'|null $Type
 * @property list<Shapes\ContainerMonitoringConfiguration>|null $ContainerMonitoringConfigurations
 * @property 'ACTIVE'|'CREATING'|'DELETING'|null $Status
 * @property int<0, 1000000>|null $ResolvedCidrCount
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $UpdateToken
 */
class DescribeContainerAssociationResponse extends Response
{
}
