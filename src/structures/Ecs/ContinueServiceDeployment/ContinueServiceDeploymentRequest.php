<?php

namespace Sunaoka\Aws\Structures\Ecs\ContinueServiceDeployment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serviceDeploymentArn
 * @property string $hookId
 * @property 'ROLLBACK'|'CONTINUE'|null $action
 */
class ContinueServiceDeploymentRequest extends Request
{
    /**
     * @param array{
     *     serviceDeploymentArn: string,
     *     hookId: string,
     *     action?: 'ROLLBACK'|'CONTINUE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
