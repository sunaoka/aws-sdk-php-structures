<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetSegmentMembership;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $SegmentDefinitionName
 * @property list<Shapes\ProfileQueryResult>|null $Profiles
 * @property list<Shapes\ProfileQueryFailures>|null $Failures
 */
class GetSegmentMembershipResponse extends Response
{
}
