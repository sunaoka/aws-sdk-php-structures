<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\UpdateEnvironment;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $EnvironmentName
 * @property string|null $EnvironmentId
 * @property string|null $ApplicationName
 * @property string|null $VersionLabel
 * @property string|null $SolutionStackName
 * @property string|null $PlatformArn
 * @property string|null $TemplateName
 * @property string|null $Description
 * @property string|null $EndpointURL
 * @property string|null $CNAME
 * @property \Aws\Api\DateTimeResult|null $DateCreated
 * @property \Aws\Api\DateTimeResult|null $DateUpdated
 * @property 'Aborting'|'Launching'|'Updating'|'LinkingFrom'|'LinkingTo'|'Ready'|'Terminating'|'Terminated'|null $Status
 * @property bool|null $AbortableOperationInProgress
 * @property 'Green'|'Yellow'|'Red'|'Grey'|null $Health
 * @property 'NoData'|'Unknown'|'Pending'|'Ok'|'Info'|'Warning'|'Degraded'|'Severe'|'Suspended'|null $HealthStatus
 * @property Shapes\EnvironmentResourcesDescription|null $Resources
 * @property Shapes\EnvironmentTier|null $Tier
 * @property list<Shapes\EnvironmentLink>|null $EnvironmentLinks
 * @property string|null $EnvironmentArn
 * @property string|null $OperationsRole
 */
class UpdateEnvironmentResponse extends Response
{
}
