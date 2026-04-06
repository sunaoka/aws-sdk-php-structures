<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryControlConfig;

class Route53RecoveryControlConfigClient extends \Aws\Route53RecoveryControlConfig\Route53RecoveryControlConfigClient
{
    use CreateCluster\CreateClusterTrait;
    use CreateControlPanel\CreateControlPanelTrait;
    use CreateRoutingControl\CreateRoutingControlTrait;
    use CreateSafetyRule\CreateSafetyRuleTrait;
    use DeleteCluster\DeleteClusterTrait;
    use DeleteControlPanel\DeleteControlPanelTrait;
    use DeleteRoutingControl\DeleteRoutingControlTrait;
    use DeleteSafetyRule\DeleteSafetyRuleTrait;
    use DescribeCluster\DescribeClusterTrait;
    use DescribeControlPanel\DescribeControlPanelTrait;
    use DescribeRoutingControl\DescribeRoutingControlTrait;
    use DescribeSafetyRule\DescribeSafetyRuleTrait;
    use GetResourcePolicy\GetResourcePolicyTrait;
    use ListAssociatedRoute53HealthChecks\ListAssociatedRoute53HealthChecksTrait;
    use ListClusters\ListClustersTrait;
    use ListControlPanels\ListControlPanelsTrait;
    use ListRoutingControls\ListRoutingControlsTrait;
    use ListSafetyRules\ListSafetyRulesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateCluster\UpdateClusterTrait;
    use UpdateControlPanel\UpdateControlPanelTrait;
    use UpdateRoutingControl\UpdateRoutingControlTrait;
    use UpdateSafetyRule\UpdateSafetyRuleTrait;
}
