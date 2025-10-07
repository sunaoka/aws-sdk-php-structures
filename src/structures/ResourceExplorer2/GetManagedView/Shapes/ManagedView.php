<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\GetManagedView\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ManagedViewArn
 * @property string|null $ManagedViewName
 * @property string|null $TrustedService
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedAt
 * @property string|null $Owner
 * @property string|null $Scope
 * @property list<IncludedProperty>|null $IncludedProperties
 * @property SearchFilter|null $Filters
 * @property string|null $ResourcePolicy
 * @property string|null $Version
 */
class ManagedView extends Shape
{
    /**
     * @param array{
     *     ManagedViewArn?: string|null,
     *     ManagedViewName?: string|null,
     *     TrustedService?: string|null,
     *     LastUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     Owner?: string|null,
     *     Scope?: string|null,
     *     IncludedProperties?: list<IncludedProperty>|null,
     *     Filters?: SearchFilter|null,
     *     ResourcePolicy?: string|null,
     *     Version?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
