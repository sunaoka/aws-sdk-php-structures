<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\CreateComponentVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'REQUESTED'|'INITIATED'|'DEPLOYABLE'|'FAILED'|'DEPRECATED'|null $componentState
 * @property string|null $message
 * @property array<string, string>|null $errors
 * @property 'ACTIVE'|'DISCONTINUED'|'DELETED'|null $vendorGuidance
 * @property string|null $vendorGuidanceMessage
 */
class CloudComponentStatus extends Shape
{
    /**
     * @param array{
     *     componentState?: 'REQUESTED'|'INITIATED'|'DEPLOYABLE'|'FAILED'|'DEPRECATED'|null,
     *     message?: string|null,
     *     errors?: array<string, string>|null,
     *     vendorGuidance?: 'ACTIVE'|'DISCONTINUED'|'DELETED'|null,
     *     vendorGuidanceMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
