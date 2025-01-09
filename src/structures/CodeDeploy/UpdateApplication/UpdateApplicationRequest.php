<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\UpdateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationName
 * @property string $newApplicationName
 */
class UpdateApplicationRequest extends Request
{
    /**
     * @param array{
     *     applicationName?: string,
     *     newApplicationName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
