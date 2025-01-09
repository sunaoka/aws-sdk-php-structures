<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\CreateComponentVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'REQUESTED'|'INITIATED'|'DEPLOYABLE'|'FAILED'|'DEPRECATED' $componentState
 * @property string $message
 * @property array<string, string> $errors
 * @property 'ACTIVE'|'DISCONTINUED'|'DELETED' $vendorGuidance
 * @property string $vendorGuidanceMessage
 */
class CloudComponentStatus extends Shape
{
    /**
     * @param array{
     *     componentState?: 'REQUESTED'|'INITIATED'|'DEPLOYABLE'|'FAILED'|'DEPRECATED',
     *     message?: string,
     *     errors?: array<string, string>,
     *     vendorGuidance?: 'ACTIVE'|'DISCONTINUED'|'DELETED',
     *     vendorGuidanceMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
