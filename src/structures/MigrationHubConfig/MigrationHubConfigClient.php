<?php

namespace Sunaoka\Aws\Structures\MigrationHubConfig;

class MigrationHubConfigClient extends \Aws\MigrationHubConfig\MigrationHubConfigClient
{
    use CreateHomeRegionControl\CreateHomeRegionControlTrait;
    use DeleteHomeRegionControl\DeleteHomeRegionControlTrait;
    use DescribeHomeRegionControls\DescribeHomeRegionControlsTrait;
    use GetHomeRegion\GetHomeRegionTrait;
}
