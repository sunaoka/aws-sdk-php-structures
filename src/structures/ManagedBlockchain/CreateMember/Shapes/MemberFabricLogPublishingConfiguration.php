<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\CreateMember\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LogConfigurations|null $CaLogs
 */
class MemberFabricLogPublishingConfiguration extends Shape
{
    /**
     * @param array{CaLogs?: LogConfigurations|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
