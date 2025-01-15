<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribeEnvironments\Shapes;

use Sunaoka\Aws\Structures\Shape;

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
 * @property EnvironmentResourcesDescription|null $Resources
 * @property EnvironmentTier|null $Tier
 * @property list<EnvironmentLink>|null $EnvironmentLinks
 * @property string|null $EnvironmentArn
 * @property string|null $OperationsRole
 */
class EnvironmentDescription extends Shape
{
    /**
     * @param array{
     *     EnvironmentName?: string|null,
     *     EnvironmentId?: string|null,
     *     ApplicationName?: string|null,
     *     VersionLabel?: string|null,
     *     SolutionStackName?: string|null,
     *     PlatformArn?: string|null,
     *     TemplateName?: string|null,
     *     Description?: string|null,
     *     EndpointURL?: string|null,
     *     CNAME?: string|null,
     *     DateCreated?: \Aws\Api\DateTimeResult|null,
     *     DateUpdated?: \Aws\Api\DateTimeResult|null,
     *     Status?: 'Aborting'|'Launching'|'Updating'|'LinkingFrom'|'LinkingTo'|'Ready'|'Terminating'|'Terminated'|null,
     *     AbortableOperationInProgress?: bool|null,
     *     Health?: 'Green'|'Yellow'|'Red'|'Grey'|null,
     *     HealthStatus?: 'NoData'|'Unknown'|'Pending'|'Ok'|'Info'|'Warning'|'Degraded'|'Severe'|'Suspended'|null,
     *     Resources?: EnvironmentResourcesDescription|null,
     *     Tier?: EnvironmentTier|null,
     *     EnvironmentLinks?: list<EnvironmentLink>|null,
     *     EnvironmentArn?: string|null,
     *     OperationsRole?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
