<?php

namespace Sunaoka\Aws\Structures\Rds\SwitchoverBlueGreenDeployment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BlueGreenDeploymentIdentifier
 * @property int $SwitchoverTimeout
 */
class SwitchoverBlueGreenDeploymentRequest extends Request
{
    /**
     * @param array{
     *     BlueGreenDeploymentIdentifier: string,
     *     SwitchoverTimeout?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
