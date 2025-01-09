<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\CreateDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $merge
 * @property list<string> $reset
 */
class ComponentConfigurationUpdate extends Shape
{
    /**
     * @param array{
     *     merge?: string,
     *     reset?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
