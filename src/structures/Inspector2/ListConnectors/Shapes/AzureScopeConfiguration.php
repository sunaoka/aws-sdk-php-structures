<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListConnectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ScopeConfiguration|null $vmScanning
 * @property ScopeConfiguration|null $containerImageScanning
 * @property ScopeConfiguration|null $serverlessScanning
 */
class AzureScopeConfiguration extends Shape
{
    /**
     * @param array{
     *     vmScanning?: ScopeConfiguration|null,
     *     containerImageScanning?: ScopeConfiguration|null,
     *     serverlessScanning?: ScopeConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
