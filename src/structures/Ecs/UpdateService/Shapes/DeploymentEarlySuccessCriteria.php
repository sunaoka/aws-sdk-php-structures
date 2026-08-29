<?php

namespace Sunaoka\Aws\Structures\Ecs\UpdateService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $enable
 * @property int<0, 100>|null $healthyPercent
 * @property 'BLOCKING'|'DEFERRED'|null $sourceServiceRevisionCleanup
 */
class DeploymentEarlySuccessCriteria extends Shape
{
    /**
     * @param array{
     *     enable: bool,
     *     healthyPercent?: int<0, 100>|null,
     *     sourceServiceRevisionCleanup?: 'BLOCKING'|'DEFERRED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
