<?php

namespace Sunaoka\Aws\Structures\SecurityHub\UpdateConnectorV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ProjectKey
 */
class JiraCloudUpdateConfiguration extends Shape
{
    /**
     * @param array{ProjectKey: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
