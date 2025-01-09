<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\ComposeEnvironments\Shapes;

use Sunaoka\Aws\Structures\Shape;

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
 * @property EnvironmentResourcesDescription $Resources
 * @property EnvironmentTier $Tier
 * @property list<EnvironmentLink> $EnvironmentLinks
 * @property string $EnvironmentArn
 * @property string $OperationsRole
 */
class EnvironmentDescription extends Shape
{
    /**
     * @param array{
     *     EnvironmentName?: string,
     *     EnvironmentId?: string,
     *     ApplicationName?: string,
     *     VersionLabel?: string,
     *     SolutionStackName?: string,
     *     PlatformArn?: string,
     *     TemplateName?: string,
     *     Description?: string,
     *     EndpointURL?: string,
     *     CNAME?: string,
     *     DateCreated?: \Aws\Api\DateTimeResult,
     *     DateUpdated?: \Aws\Api\DateTimeResult,
     *     Status?: 'Aborting'|'Launching'|'Updating'|'LinkingFrom'|'LinkingTo'|'Ready'|'Terminating'|'Terminated',
     *     AbortableOperationInProgress?: bool,
     *     Health?: 'Green'|'Yellow'|'Red'|'Grey',
     *     HealthStatus?: 'NoData'|'Unknown'|'Pending'|'Ok'|'Info'|'Warning'|'Degraded'|'Severe'|'Suspended',
     *     Resources?: EnvironmentResourcesDescription,
     *     Tier?: EnvironmentTier,
     *     EnvironmentLinks?: list<EnvironmentLink>,
     *     EnvironmentArn?: string,
     *     OperationsRole?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
