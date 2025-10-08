<?php

namespace Sunaoka\Aws\Structures\AppFabric;

class AppFabricClient extends \Aws\AppFabric\AppFabricClient
{
    use BatchGetUserAccessTasks\BatchGetUserAccessTasksTrait;
    use ConnectAppAuthorization\ConnectAppAuthorizationTrait;
    use CreateAppAuthorization\CreateAppAuthorizationTrait;
    use CreateAppBundle\CreateAppBundleTrait;
    use CreateIngestion\CreateIngestionTrait;
    use CreateIngestionDestination\CreateIngestionDestinationTrait;
    use DeleteAppAuthorization\DeleteAppAuthorizationTrait;
    use DeleteAppBundle\DeleteAppBundleTrait;
    use DeleteIngestion\DeleteIngestionTrait;
    use DeleteIngestionDestination\DeleteIngestionDestinationTrait;
    use GetAppAuthorization\GetAppAuthorizationTrait;
    use GetAppBundle\GetAppBundleTrait;
    use GetIngestion\GetIngestionTrait;
    use GetIngestionDestination\GetIngestionDestinationTrait;
    use ListAppAuthorizations\ListAppAuthorizationsTrait;
    use ListAppBundles\ListAppBundlesTrait;
    use ListIngestionDestinations\ListIngestionDestinationsTrait;
    use ListIngestions\ListIngestionsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use StartIngestion\StartIngestionTrait;
    use StartUserAccessTasks\StartUserAccessTasksTrait;
    use StopIngestion\StopIngestionTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateAppAuthorization\UpdateAppAuthorizationTrait;
    use UpdateIngestionDestination\UpdateIngestionDestinationTrait;
}
