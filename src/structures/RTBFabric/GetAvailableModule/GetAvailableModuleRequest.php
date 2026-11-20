<?php

namespace Sunaoka\Aws\Structures\RTBFabric\GetAvailableModule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $moduleId
 */
class GetAvailableModuleRequest extends Request
{
    /**
     * @param array{moduleId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
