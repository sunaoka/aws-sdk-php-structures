<?php

namespace Sunaoka\Aws\Structures\IoTFleetHub;

class IoTFleetHubClient extends \Aws\IoTFleetHub\IoTFleetHubClient
{
    use CreateApplication\CreateApplicationTrait;
    use DeleteApplication\DeleteApplicationTrait;
    use DescribeApplication\DescribeApplicationTrait;
    use ListApplications\ListApplicationsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateApplication\UpdateApplicationTrait;
}
