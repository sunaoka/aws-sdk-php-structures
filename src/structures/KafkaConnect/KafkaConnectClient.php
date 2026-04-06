<?php

namespace Sunaoka\Aws\Structures\KafkaConnect;

class KafkaConnectClient extends \Aws\KafkaConnect\KafkaConnectClient
{
    use CreateConnector\CreateConnectorTrait;
    use CreateCustomPlugin\CreateCustomPluginTrait;
    use CreateWorkerConfiguration\CreateWorkerConfigurationTrait;
    use DeleteConnector\DeleteConnectorTrait;
    use DeleteCustomPlugin\DeleteCustomPluginTrait;
    use DeleteWorkerConfiguration\DeleteWorkerConfigurationTrait;
    use DescribeConnector\DescribeConnectorTrait;
    use DescribeCustomPlugin\DescribeCustomPluginTrait;
    use DescribeWorkerConfiguration\DescribeWorkerConfigurationTrait;
    use ListConnectors\ListConnectorsTrait;
    use ListCustomPlugins\ListCustomPluginsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListWorkerConfigurations\ListWorkerConfigurationsTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateConnector\UpdateConnectorTrait;
}
