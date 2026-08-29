<?php

namespace Sunaoka\Aws\Structures\HealthLake\DescribeFHIRDatastore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED'|null $Status
 * @property 'CONTINUOUS'|null $BackupType
 * @property int<1, 30>|null $RetentionPeriodInDays
 * @property bool|null $BackupTagsEnabled
 */
class BackupConfiguration extends Shape
{
    /**
     * @param array{
     *     Status?: 'ENABLED'|'DISABLED'|null,
     *     BackupType?: 'CONTINUOUS'|null,
     *     RetentionPeriodInDays?: int<1, 30>|null,
     *     BackupTagsEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
