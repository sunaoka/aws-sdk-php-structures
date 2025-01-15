<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutResourcePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $policyName
 * @property string|null $policyDocument
 * @property int<0, max>|null $lastUpdatedTime
 */
class ResourcePolicy extends Shape
{
    /**
     * @param array{
     *     policyName?: string|null,
     *     policyDocument?: string|null,
     *     lastUpdatedTime?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
