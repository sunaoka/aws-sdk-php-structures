<?php

namespace Sunaoka\Aws\Structures\ApiGateway\CreateUsagePlan;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string $name
 * @property string $description
 * @property list<Shapes\ApiStage> $apiStages
 * @property Shapes\ThrottleSettings $throttle
 * @property Shapes\QuotaSettings $quota
 * @property string $productCode
 * @property array<string, string> $tags
 */
class CreateUsagePlanResponse extends Response
{
}
