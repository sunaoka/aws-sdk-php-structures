<?php

namespace Sunaoka\Aws\Structures\NovaAct\ListModels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $clientCompatibilityVersion
 */
class ListModelsRequest extends Request
{
    /**
     * @param array{clientCompatibilityVersion: int} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
