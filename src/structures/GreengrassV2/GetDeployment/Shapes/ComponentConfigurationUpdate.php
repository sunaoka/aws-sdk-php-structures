<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\GetDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $merge
 * @property list<string>|null $reset
 */
class ComponentConfigurationUpdate extends Shape
{
    /**
     * @param array{
     *     merge?: string|null,
     *     reset?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
