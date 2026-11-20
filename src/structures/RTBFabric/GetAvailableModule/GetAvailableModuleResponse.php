<?php

namespace Sunaoka\Aws\Structures\RTBFabric\GetAvailableModule;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $moduleId
 * @property string $moduleArn
 * @property string $moduleName
 * @property string|null $description
 * @property 'MARKETPLACE'|'PRIVATE'|'AWS_BUILT_IN' $subscriptionType
 * @property 'ACTIVE'|'EXPIRED' $subscriptionStatus
 * @property string|null $marketplaceProductId
 * @property \Aws\Api\DateTimeResult $createdAt
 */
class GetAvailableModuleResponse extends Response
{
}
