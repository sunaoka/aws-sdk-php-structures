<?php

namespace Sunaoka\Aws\Structures\MediaPackageVod;

class MediaPackageVodClient extends \Aws\MediaPackageVod\MediaPackageVodClient
{
    use ConfigureLogs\ConfigureLogsTrait;
    use CreateAsset\CreateAssetTrait;
    use CreatePackagingConfiguration\CreatePackagingConfigurationTrait;
    use CreatePackagingGroup\CreatePackagingGroupTrait;
    use DeleteAsset\DeleteAssetTrait;
    use DeletePackagingConfiguration\DeletePackagingConfigurationTrait;
    use DeletePackagingGroup\DeletePackagingGroupTrait;
    use DescribeAsset\DescribeAssetTrait;
    use DescribePackagingConfiguration\DescribePackagingConfigurationTrait;
    use DescribePackagingGroup\DescribePackagingGroupTrait;
    use ListAssets\ListAssetsTrait;
    use ListPackagingConfigurations\ListPackagingConfigurationsTrait;
    use ListPackagingGroups\ListPackagingGroupsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdatePackagingGroup\UpdatePackagingGroupTrait;
}
