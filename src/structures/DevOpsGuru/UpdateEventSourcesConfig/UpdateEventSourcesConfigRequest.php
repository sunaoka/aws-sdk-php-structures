<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\UpdateEventSourcesConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\EventSourcesConfig $EventSources
 */
class UpdateEventSourcesConfigRequest extends Request
{
    /**
     * @param array{EventSources?: Shapes\EventSourcesConfig} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
