<?php

namespace Sunaoka\Aws\Structures\Appflow\CreateConnectorProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $instanceUrl
 * @property bool $isSandboxEnvironment
 * @property string $businessUnitId
 */
class PardotConnectorProfileProperties extends Shape
{
    /**
     * @param array{
     *     instanceUrl?: string,
     *     isSandboxEnvironment?: bool,
     *     businessUnitId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
