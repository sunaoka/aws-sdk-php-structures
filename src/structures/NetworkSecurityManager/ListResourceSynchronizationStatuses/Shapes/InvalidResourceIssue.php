<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\ListResourceSynchronizationStatuses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $resourceId
 * @property string|null $expectedValue
 * @property string|null $actualValue
 */
class InvalidResourceIssue extends Shape
{
    /**
     * @param array{
     *     resourceId?: string|null,
     *     expectedValue?: string|null,
     *     actualValue?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
