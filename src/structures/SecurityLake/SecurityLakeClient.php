<?php

namespace Sunaoka\Aws\Structures\SecurityLake;

class SecurityLakeClient extends \Aws\SecurityLake\SecurityLakeClient
{
    use CreateAwsLogSource\CreateAwsLogSourceTrait;
    use CreateCustomLogSource\CreateCustomLogSourceTrait;
    use CreateDataLake\CreateDataLakeTrait;
    use CreateDataLakeExceptionSubscription\CreateDataLakeExceptionSubscriptionTrait;
    use CreateDataLakeOrganizationConfiguration\CreateDataLakeOrganizationConfigurationTrait;
    use CreateSubscriber\CreateSubscriberTrait;
    use CreateSubscriberNotification\CreateSubscriberNotificationTrait;
    use DeleteAwsLogSource\DeleteAwsLogSourceTrait;
    use DeleteCustomLogSource\DeleteCustomLogSourceTrait;
    use DeleteDataLake\DeleteDataLakeTrait;
    use DeleteDataLakeExceptionSubscription\DeleteDataLakeExceptionSubscriptionTrait;
    use DeleteDataLakeOrganizationConfiguration\DeleteDataLakeOrganizationConfigurationTrait;
    use DeleteSubscriber\DeleteSubscriberTrait;
    use DeleteSubscriberNotification\DeleteSubscriberNotificationTrait;
    use DeregisterDataLakeDelegatedAdministrator\DeregisterDataLakeDelegatedAdministratorTrait;
    use GetDataLakeExceptionSubscription\GetDataLakeExceptionSubscriptionTrait;
    use GetDataLakeOrganizationConfiguration\GetDataLakeOrganizationConfigurationTrait;
    use GetDataLakeSources\GetDataLakeSourcesTrait;
    use GetSubscriber\GetSubscriberTrait;
    use ListDataLakeExceptions\ListDataLakeExceptionsTrait;
    use ListDataLakes\ListDataLakesTrait;
    use ListLogSources\ListLogSourcesTrait;
    use ListSubscribers\ListSubscribersTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use RegisterDataLakeDelegatedAdministrator\RegisterDataLakeDelegatedAdministratorTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateDataLake\UpdateDataLakeTrait;
    use UpdateDataLakeExceptionSubscription\UpdateDataLakeExceptionSubscriptionTrait;
    use UpdateSubscriber\UpdateSubscriberTrait;
    use UpdateSubscriberNotification\UpdateSubscriberNotificationTrait;
}
