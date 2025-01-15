<?php

namespace Sunaoka\Aws\Structures\Rds\SwitchoverBlueGreenDeployment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BlueGreenDeploymentIdentifier
 * @property int<30, max>|null $SwitchoverTimeout
 */
class SwitchoverBlueGreenDeploymentRequest extends Request
{
    /**
     * @param array{
     *     BlueGreenDeploymentIdentifier: string,
     *     SwitchoverTimeout?: int<30, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
