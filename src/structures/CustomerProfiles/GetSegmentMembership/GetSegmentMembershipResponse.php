<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetSegmentMembership;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $SegmentDefinitionName
 * @property list<Shapes\ProfileQueryResult> $Profiles
 * @property list<Shapes\ProfileQueryFailures> $Failures
 */
class GetSegmentMembershipResponse extends Response
{
}
