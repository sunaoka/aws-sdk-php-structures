<?php

namespace Sunaoka\Aws\Structures\SecurityHub\CreateConnectorV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ProjectKey
 */
class JiraCloudProviderConfiguration extends Shape
{
    /**
     * @param array{ProjectKey?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
