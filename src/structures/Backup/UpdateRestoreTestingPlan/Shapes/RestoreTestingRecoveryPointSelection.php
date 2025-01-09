<?php

namespace Sunaoka\Aws\Structures\Backup\UpdateRestoreTestingPlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'LATEST_WITHIN_WINDOW'|'RANDOM_WITHIN_WINDOW' $Algorithm
 * @property list<string> $ExcludeVaults
 * @property list<string> $IncludeVaults
 * @property list<'CONTINUOUS'|'SNAPSHOT'> $RecoveryPointTypes
 * @property int $SelectionWindowDays
 */
class RestoreTestingRecoveryPointSelection extends Shape
{
    /**
     * @param array{
     *     Algorithm?: 'LATEST_WITHIN_WINDOW'|'RANDOM_WITHIN_WINDOW',
     *     ExcludeVaults?: list<string>,
     *     IncludeVaults?: list<string>,
     *     RecoveryPointTypes?: list<'CONTINUOUS'|'SNAPSHOT'>,
     *     SelectionWindowDays?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
