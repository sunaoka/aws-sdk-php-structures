<?php

namespace Sunaoka\Aws\Structures\GuardDuty\CreateDetector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MalwareProtectionConfigurationResult $MalwareProtection
 */
class UnprocessedDataSourcesResult extends Shape
{
    /**
     * @param array{MalwareProtection?: MalwareProtectionConfigurationResult} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
