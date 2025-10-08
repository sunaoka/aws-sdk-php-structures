<?php

namespace Sunaoka\Aws\Structures\AppConfigData;

class AppConfigDataClient extends \Aws\AppConfigData\AppConfigDataClient
{
    use GetLatestConfiguration\GetLatestConfigurationTrait;
    use StartConfigurationSession\StartConfigurationSessionTrait;
}
