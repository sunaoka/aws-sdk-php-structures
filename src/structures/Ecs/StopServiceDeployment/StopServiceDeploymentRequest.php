<?php

namespace Sunaoka\Aws\Structures\Ecs\StopServiceDeployment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serviceDeploymentArn
 * @property 'ABORT'|'ROLLBACK'|null $stopType
 */
class StopServiceDeploymentRequest extends Request
{
    /**
     * @param array{
     *     serviceDeploymentArn: string,
     *     stopType?: 'ABORT'|'ROLLBACK'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
