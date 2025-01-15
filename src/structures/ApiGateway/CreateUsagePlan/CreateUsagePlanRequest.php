<?php

namespace Sunaoka\Aws\Structures\ApiGateway\CreateUsagePlan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property list<Shapes\ApiStage>|null $apiStages
 * @property Shapes\ThrottleSettings|null $throttle
 * @property Shapes\QuotaSettings|null $quota
 * @property array<string, string>|null $tags
 */
class CreateUsagePlanRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     apiStages?: list<Shapes\ApiStage>|null,
     *     throttle?: Shapes\ThrottleSettings|null,
     *     quota?: Shapes\QuotaSettings|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
