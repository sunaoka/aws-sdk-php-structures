<?php

namespace Sunaoka\Aws\Structures\MQ;

class MQClient extends \Aws\MQ\MQClient
{
    use CreateBroker\CreateBrokerTrait;
    use CreateConfiguration\CreateConfigurationTrait;
    use CreateTags\CreateTagsTrait;
    use CreateUser\CreateUserTrait;
    use DeleteBroker\DeleteBrokerTrait;
    use DeleteConfiguration\DeleteConfigurationTrait;
    use DeleteTags\DeleteTagsTrait;
    use DeleteUser\DeleteUserTrait;
    use DescribeBroker\DescribeBrokerTrait;
    use DescribeBrokerEngineTypes\DescribeBrokerEngineTypesTrait;
    use DescribeBrokerInstanceOptions\DescribeBrokerInstanceOptionsTrait;
    use DescribeConfiguration\DescribeConfigurationTrait;
    use DescribeConfigurationRevision\DescribeConfigurationRevisionTrait;
    use DescribeUser\DescribeUserTrait;
    use ListBrokers\ListBrokersTrait;
    use ListConfigurationRevisions\ListConfigurationRevisionsTrait;
    use ListConfigurations\ListConfigurationsTrait;
    use ListTags\ListTagsTrait;
    use ListUsers\ListUsersTrait;
    use Promote\PromoteTrait;
    use RebootBroker\RebootBrokerTrait;
    use UpdateBroker\UpdateBrokerTrait;
    use UpdateConfiguration\UpdateConfigurationTrait;
    use UpdateUser\UpdateUserTrait;
}
