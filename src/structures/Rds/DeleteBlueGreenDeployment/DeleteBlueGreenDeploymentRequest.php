<?php

namespace Sunaoka\Aws\Structures\Rds\DeleteBlueGreenDeployment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BlueGreenDeploymentIdentifier
 * @property bool $DeleteTarget
 */
class DeleteBlueGreenDeploymentRequest extends Request
{
    /**
     * @param array{
     *     BlueGreenDeploymentIdentifier: string,
     *     DeleteTarget?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
