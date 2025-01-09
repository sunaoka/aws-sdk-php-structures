<?php

namespace Sunaoka\Aws\Structures\ApiGateway\CreateUsagePlan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $description
 * @property list<Shapes\ApiStage> $apiStages
 * @property Shapes\ThrottleSettings $throttle
 * @property Shapes\QuotaSettings $quota
 * @property array<string, string> $tags
 */
class CreateUsagePlanRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string,
     *     apiStages?: list<Shapes\ApiStage>,
     *     throttle?: Shapes\ThrottleSettings,
     *     quota?: Shapes\QuotaSettings,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
