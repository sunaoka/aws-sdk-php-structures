<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListInvestigationRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ClusterName
 * @property string|null $Username
 * @property string|null $UserGroups
 * @property string|null $UserId
 * @property string|null $Verb
 * @property string|null $ResourceType
 * @property string|null $ResourceName
 * @property string|null $Namespace
 * @property string|null $RequestUri
 * @property int|null $StatusCode
 * @property string|null $SourceIps
 * @property string|null $UserAgent
 * @property int<0, max>|null $EventCount
 */
class KubernetesApiCall extends Shape
{
    /**
     * @param array{
     *     ClusterName?: string|null,
     *     Username?: string|null,
     *     UserGroups?: string|null,
     *     UserId?: string|null,
     *     Verb?: string|null,
     *     ResourceType?: string|null,
     *     ResourceName?: string|null,
     *     Namespace?: string|null,
     *     RequestUri?: string|null,
     *     StatusCode?: int|null,
     *     SourceIps?: string|null,
     *     UserAgent?: string|null,
     *     EventCount?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
