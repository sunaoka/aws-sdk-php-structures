<?php

namespace Sunaoka\Aws\Structures\Appflow\CreateConnectorProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $instanceUrl
 * @property bool|null $isSandboxEnvironment
 * @property string|null $businessUnitId
 */
class PardotConnectorProfileProperties extends Shape
{
    /**
     * @param array{
     *     instanceUrl?: string|null,
     *     isSandboxEnvironment?: bool|null,
     *     businessUnitId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
