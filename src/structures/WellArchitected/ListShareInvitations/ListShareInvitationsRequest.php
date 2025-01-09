<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListShareInvitations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkloadNamePrefix
 * @property string $LensNamePrefix
 * @property 'WORKLOAD'|'LENS'|'PROFILE'|'TEMPLATE' $ShareResourceType
 * @property string $NextToken
 * @property int $MaxResults
 * @property string $ProfileNamePrefix
 * @property string $TemplateNamePrefix
 */
class ListShareInvitationsRequest extends Request
{
    /**
     * @param array{
     *     WorkloadNamePrefix?: string,
     *     LensNamePrefix?: string,
     *     ShareResourceType?: 'WORKLOAD'|'LENS'|'PROFILE'|'TEMPLATE',
     *     NextToken?: string,
     *     MaxResults?: int,
     *     ProfileNamePrefix?: string,
     *     TemplateNamePrefix?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
