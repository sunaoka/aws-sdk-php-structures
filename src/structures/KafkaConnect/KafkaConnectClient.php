<?php

namespace Sunaoka\Aws\Structures\KafkaConnect;

class KafkaConnectClient extends \Aws\KafkaConnect\KafkaConnectClient
{
    use CreateConnector\CreateConnectorTrait;
    use CreateCustomPlugin\CreateCustomPluginTrait;
    use CreateWorkerConfiguration\CreateWorkerConfigurationTrait;
    use DeleteConnector\DeleteConnectorTrait;
    use DeleteCustomPlugin\DeleteCustomPluginTrait;
    use DescribeConnector\DescribeConnectorTrait;
    use DescribeCustomPlugin\DescribeCustomPluginTrait;
    use DescribeWorkerConfiguration\DescribeWorkerConfigurationTrait;
    use ListConnectors\ListConnectorsTrait;
    use ListCustomPlugins\ListCustomPluginsTrait;
    use ListWorkerConfigurations\ListWorkerConfigurationsTrait;
    use UpdateConnector\UpdateConnectorTrait;
}
