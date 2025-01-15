<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetUsagePlans\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $name
 * @property string|null $description
 * @property list<ApiStage>|null $apiStages
 * @property ThrottleSettings|null $throttle
 * @property QuotaSettings|null $quota
 * @property string|null $productCode
 * @property array<string, string>|null $tags
 */
class UsagePlan extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     name?: string|null,
     *     description?: string|null,
     *     apiStages?: list<ApiStage>|null,
     *     throttle?: ThrottleSettings|null,
     *     quota?: QuotaSettings|null,
     *     productCode?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
