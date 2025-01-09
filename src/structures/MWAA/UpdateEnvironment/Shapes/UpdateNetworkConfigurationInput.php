<?php

namespace Sunaoka\Aws\Structures\MWAA\UpdateEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $SecurityGroupIds
 */
class UpdateNetworkConfigurationInput extends Shape
{
    /**
     * @param array{SecurityGroupIds: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
