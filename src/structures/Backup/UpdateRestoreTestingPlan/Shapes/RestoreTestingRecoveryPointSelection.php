<?php

namespace Sunaoka\Aws\Structures\Backup\UpdateRestoreTestingPlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'LATEST_WITHIN_WINDOW'|'RANDOM_WITHIN_WINDOW'|null $Algorithm
 * @property list<string>|null $ExcludeVaults
 * @property list<string>|null $IncludeVaults
 * @property list<'CONTINUOUS'|'SNAPSHOT'>|null $RecoveryPointTypes
 * @property int|null $SelectionWindowDays
 */
class RestoreTestingRecoveryPointSelection extends Shape
{
    /**
     * @param array{
     *     Algorithm?: 'LATEST_WITHIN_WINDOW'|'RANDOM_WITHIN_WINDOW'|null,
     *     ExcludeVaults?: list<string>|null,
     *     IncludeVaults?: list<string>|null,
     *     RecoveryPointTypes?: list<'CONTINUOUS'|'SNAPSHOT'>|null,
     *     SelectionWindowDays?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
