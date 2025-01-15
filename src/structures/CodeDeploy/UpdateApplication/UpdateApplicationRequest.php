<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\UpdateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $applicationName
 * @property string|null $newApplicationName
 */
class UpdateApplicationRequest extends Request
{
    /**
     * @param array{
     *     applicationName?: string|null,
     *     newApplicationName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
