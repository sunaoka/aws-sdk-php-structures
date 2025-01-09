<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetUsagePlans\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $name
 * @property string $description
 * @property list<ApiStage> $apiStages
 * @property ThrottleSettings $throttle
 * @property QuotaSettings $quota
 * @property string $productCode
 * @property array<string, string> $tags
 */
class UsagePlan extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     name?: string,
     *     description?: string,
     *     apiStages?: list<ApiStage>,
     *     throttle?: ThrottleSettings,
     *     quota?: QuotaSettings,
     *     productCode?: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
