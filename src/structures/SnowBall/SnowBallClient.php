<?php

namespace Sunaoka\Aws\Structures\SnowBall;

class SnowBallClient extends \Aws\SnowBall\SnowBallClient
{
    use CancelCluster\CancelClusterTrait;
    use CancelJob\CancelJobTrait;
    use CreateAddress\CreateAddressTrait;
    use CreateCluster\CreateClusterTrait;
    use CreateJob\CreateJobTrait;
    use CreateLongTermPricing\CreateLongTermPricingTrait;
    use CreateReturnShippingLabel\CreateReturnShippingLabelTrait;
    use DescribeAddress\DescribeAddressTrait;
    use DescribeAddresses\DescribeAddressesTrait;
    use DescribeCluster\DescribeClusterTrait;
    use DescribeJob\DescribeJobTrait;
    use DescribeReturnShippingLabel\DescribeReturnShippingLabelTrait;
    use GetJobManifest\GetJobManifestTrait;
    use GetJobUnlockCode\GetJobUnlockCodeTrait;
    use GetSnowballUsage\GetSnowballUsageTrait;
    use GetSoftwareUpdates\GetSoftwareUpdatesTrait;
    use ListClusterJobs\ListClusterJobsTrait;
    use ListClusters\ListClustersTrait;
    use ListCompatibleImages\ListCompatibleImagesTrait;
    use ListJobs\ListJobsTrait;
    use ListLongTermPricing\ListLongTermPricingTrait;
    use ListPickupLocations\ListPickupLocationsTrait;
    use ListServiceVersions\ListServiceVersionsTrait;
    use UpdateCluster\UpdateClusterTrait;
    use UpdateJob\UpdateJobTrait;
    use UpdateJobShipmentState\UpdateJobShipmentStateTrait;
    use UpdateLongTermPricing\UpdateLongTermPricingTrait;
}
