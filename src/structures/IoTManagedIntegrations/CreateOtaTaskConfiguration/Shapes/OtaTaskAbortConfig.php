<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\CreateOtaTaskConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AbortConfigCriteria>|null $AbortConfigCriteriaList
 */
class OtaTaskAbortConfig extends Shape
{
    /**
     * @param array{AbortConfigCriteriaList?: list<AbortConfigCriteria>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
