<?php

namespace Sunaoka\Aws\Structures\ControlTower\ListEnabledControls\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $controlIdentifiers
 * @property list<'SUCCEEDED'|'FAILED'|'UNDER_CHANGE'>|null $statuses
 * @property list<'DRIFTED'|'IN_SYNC'|'NOT_CHECKING'|'UNKNOWN'>|null $driftStatuses
 * @property list<string>|null $parentIdentifiers
 * @property list<'DRIFTED'|'IN_SYNC'|'NOT_CHECKING'|'UNKNOWN'>|null $inheritanceDriftStatuses
 * @property list<'DRIFTED'|'IN_SYNC'|'NOT_CHECKING'|'UNKNOWN'>|null $resourceDriftStatuses
 */
class EnabledControlFilter extends Shape
{
    /**
     * @param array{
     *     controlIdentifiers?: list<string>|null,
     *     statuses?: list<'SUCCEEDED'|'FAILED'|'UNDER_CHANGE'>|null,
     *     driftStatuses?: list<'DRIFTED'|'IN_SYNC'|'NOT_CHECKING'|'UNKNOWN'>|null,
     *     parentIdentifiers?: list<string>|null,
     *     inheritanceDriftStatuses?: list<'DRIFTED'|'IN_SYNC'|'NOT_CHECKING'|'UNKNOWN'>|null,
     *     resourceDriftStatuses?: list<'DRIFTED'|'IN_SYNC'|'NOT_CHECKING'|'UNKNOWN'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
