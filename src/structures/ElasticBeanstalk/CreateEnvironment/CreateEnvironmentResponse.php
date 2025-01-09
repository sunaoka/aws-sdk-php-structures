<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\CreateEnvironment;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $EnvironmentName
 * @property string $EnvironmentId
 * @property string $ApplicationName
 * @property string $VersionLabel
 * @property string $SolutionStackName
 * @property string $PlatformArn
 * @property string $TemplateName
 * @property string $Description
 * @property string $EndpointURL
 * @property string $CNAME
 * @property \Aws\Api\DateTimeResult $DateCreated
 * @property \Aws\Api\DateTimeResult $DateUpdated
 * @property 'Aborting'|'Launching'|'Updating'|'LinkingFrom'|'LinkingTo'|'Ready'|'Terminating'|'Terminated' $Status
 * @property bool $AbortableOperationInProgress
 * @property 'Green'|'Yellow'|'Red'|'Grey' $Health
 * @property 'NoData'|'Unknown'|'Pending'|'Ok'|'Info'|'Warning'|'Degraded'|'Severe'|'Suspended' $HealthStatus
 * @property Shapes\EnvironmentResourcesDescription $Resources
 * @property Shapes\EnvironmentTier $Tier
 * @property list<Shapes\EnvironmentLink> $EnvironmentLinks
 * @property string $EnvironmentArn
 * @property string $OperationsRole
 */
class CreateEnvironmentResponse extends Response
{
}
