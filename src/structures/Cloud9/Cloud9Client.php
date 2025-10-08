<?php

namespace Sunaoka\Aws\Structures\Cloud9;

class Cloud9Client extends \Aws\Cloud9\Cloud9Client
{
    use CreateEnvironmentEC2\CreateEnvironmentEC2Trait;
    use CreateEnvironmentMembership\CreateEnvironmentMembershipTrait;
    use DeleteEnvironment\DeleteEnvironmentTrait;
    use DeleteEnvironmentMembership\DeleteEnvironmentMembershipTrait;
    use DescribeEnvironmentMemberships\DescribeEnvironmentMembershipsTrait;
    use DescribeEnvironmentStatus\DescribeEnvironmentStatusTrait;
    use DescribeEnvironments\DescribeEnvironmentsTrait;
    use ListEnvironments\ListEnvironmentsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateEnvironment\UpdateEnvironmentTrait;
    use UpdateEnvironmentMembership\UpdateEnvironmentMembershipTrait;
}
