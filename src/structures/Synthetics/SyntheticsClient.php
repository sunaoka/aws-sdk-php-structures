<?php

namespace Sunaoka\Aws\Structures\Synthetics;

class SyntheticsClient extends \Aws\Synthetics\SyntheticsClient
{
    use AssociateResource\AssociateResourceTrait;
    use CreateCanary\CreateCanaryTrait;
    use CreateGroup\CreateGroupTrait;
    use DeleteCanary\DeleteCanaryTrait;
    use DeleteGroup\DeleteGroupTrait;
    use DescribeCanaries\DescribeCanariesTrait;
    use DescribeCanariesLastRun\DescribeCanariesLastRunTrait;
    use DescribeRuntimeVersions\DescribeRuntimeVersionsTrait;
    use DisassociateResource\DisassociateResourceTrait;
    use GetCanary\GetCanaryTrait;
    use GetCanaryRuns\GetCanaryRunsTrait;
    use GetGroup\GetGroupTrait;
    use ListAssociatedGroups\ListAssociatedGroupsTrait;
    use ListGroupResources\ListGroupResourcesTrait;
    use ListGroups\ListGroupsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use StartCanary\StartCanaryTrait;
    use StartCanaryDryRun\StartCanaryDryRunTrait;
    use StopCanary\StopCanaryTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateCanary\UpdateCanaryTrait;
}
