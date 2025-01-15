<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\GetManagedView\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SearchFilter|null $Filters
 * @property list<IncludedProperty>|null $IncludedProperties
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedAt
 * @property string|null $ManagedViewArn
 * @property string|null $ManagedViewName
 * @property string|null $Owner
 * @property string|null $ResourcePolicy
 * @property string|null $Scope
 * @property string|null $TrustedService
 * @property string|null $Version
 */
class ManagedView extends Shape
{
    /**
     * @param array{
     *     Filters?: SearchFilter|null,
     *     IncludedProperties?: list<IncludedProperty>|null,
     *     LastUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     ManagedViewArn?: string|null,
     *     ManagedViewName?: string|null,
     *     Owner?: string|null,
     *     ResourcePolicy?: string|null,
     *     Scope?: string|null,
     *     TrustedService?: string|null,
     *     Version?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
