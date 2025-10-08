<?php

namespace Sunaoka\Aws\Structures\CloudHsm;

class CloudHsmClient extends \Aws\CloudHsm\CloudHsmClient
{
    use AddTagsToResource\AddTagsToResourceTrait;
    use CreateHapg\CreateHapgTrait;
    use CreateHsm\CreateHsmTrait;
    use CreateLunaClient\CreateLunaClientTrait;
    use DeleteHapg\DeleteHapgTrait;
    use DeleteHsm\DeleteHsmTrait;
    use DeleteLunaClient\DeleteLunaClientTrait;
    use DescribeHapg\DescribeHapgTrait;
    use DescribeHsm\DescribeHsmTrait;
    use DescribeLunaClient\DescribeLunaClientTrait;
    use ListAvailableZones\ListAvailableZonesTrait;
    use ListHapgs\ListHapgsTrait;
    use ListHsms\ListHsmsTrait;
    use ListLunaClients\ListLunaClientsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ModifyHapg\ModifyHapgTrait;
    use ModifyHsm\ModifyHsmTrait;
    use ModifyLunaClient\ModifyLunaClientTrait;
    use RemoveTagsFromResource\RemoveTagsFromResourceTrait;
    use GetConfigFiles\GetConfigFilesTrait;
}
