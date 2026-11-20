<?php

namespace Sunaoka\Aws\Structures\RTBFabric\GetAvailableModuleVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $moduleId
 * @property string $version
 */
class GetAvailableModuleVersionRequest extends Request
{
    /**
     * @param array{
     *     moduleId: string,
     *     version: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
