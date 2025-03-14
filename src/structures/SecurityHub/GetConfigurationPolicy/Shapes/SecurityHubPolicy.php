<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetConfigurationPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $ServiceEnabled
 * @property list<string>|null $EnabledStandardIdentifiers
 * @property SecurityControlsConfiguration|null $SecurityControlsConfiguration
 */
class SecurityHubPolicy extends Shape
{
    /**
     * @param array{
     *     ServiceEnabled?: bool|null,
     *     EnabledStandardIdentifiers?: list<string>|null,
     *     SecurityControlsConfiguration?: SecurityControlsConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
