<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeContainerGroupDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class DescribeContainerGroupDefinitionRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
