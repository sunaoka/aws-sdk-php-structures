<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetConfigurationPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $ServiceEnabled
 * @property list<string> $EnabledStandardIdentifiers
 * @property SecurityControlsConfiguration $SecurityControlsConfiguration
 */
class SecurityHubPolicy extends Shape
{
    /**
     * @param array{
     *     ServiceEnabled?: bool,
     *     EnabledStandardIdentifiers?: list<string>,
     *     SecurityControlsConfiguration?: SecurityControlsConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
