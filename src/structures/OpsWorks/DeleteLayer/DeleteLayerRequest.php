<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DeleteLayer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LayerId
 */
class DeleteLayerRequest extends Request
{
    /**
     * @param array{LayerId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
