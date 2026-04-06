<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Allow
 * @property list<string>|null $Sandbox
 */
class IframeConfig extends Shape
{
    /**
     * @param array{
     *     Allow?: list<string>|null,
     *     Sandbox?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
