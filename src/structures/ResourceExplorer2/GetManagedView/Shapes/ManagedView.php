<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\GetManagedView\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SearchFilter $Filters
 * @property list<IncludedProperty> $IncludedProperties
 * @property \Aws\Api\DateTimeResult $LastUpdatedAt
 * @property string $ManagedViewArn
 * @property string $ManagedViewName
 * @property string $Owner
 * @property string $ResourcePolicy
 * @property string $Scope
 * @property string $TrustedService
 * @property string $Version
 */
class ManagedView extends Shape
{
    /**
     * @param array{
     *     Filters?: SearchFilter,
     *     IncludedProperties?: list<IncludedProperty>,
     *     LastUpdatedAt?: \Aws\Api\DateTimeResult,
     *     ManagedViewArn?: string,
     *     ManagedViewName?: string,
     *     Owner?: string,
     *     ResourcePolicy?: string,
     *     Scope?: string,
     *     TrustedService?: string,
     *     Version?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
