<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\UpdateEventSourcesConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\EventSourcesConfig|null $EventSources
 */
class UpdateEventSourcesConfigRequest extends Request
{
    /**
     * @param array{EventSources?: Shapes\EventSourcesConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
