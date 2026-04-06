<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetSegmentMembership;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $SegmentDefinitionName
 * @property list<string> $ProfileIds
 */
class GetSegmentMembershipRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     SegmentDefinitionName: string,
     *     ProfileIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
