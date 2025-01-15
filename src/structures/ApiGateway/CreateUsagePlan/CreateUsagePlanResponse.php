<?php

namespace Sunaoka\Aws\Structures\ApiGateway\CreateUsagePlan;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $id
 * @property string|null $name
 * @property string|null $description
 * @property list<Shapes\ApiStage>|null $apiStages
 * @property Shapes\ThrottleSettings|null $throttle
 * @property Shapes\QuotaSettings|null $quota
 * @property string|null $productCode
 * @property array<string, string>|null $tags
 */
class CreateUsagePlanResponse extends Response
{
}
