<?php

namespace Sunaoka\Aws\Structures\Backup\UpdateRestoreTestingSelection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IamRoleArn
 * @property list<string> $ProtectedResourceArns
 * @property ProtectedResourceConditions $ProtectedResourceConditions
 * @property array<string, string> $RestoreMetadataOverrides
 * @property int $ValidationWindowHours
 */
class RestoreTestingSelectionForUpdate extends Shape
{
    /**
     * @param array{
     *     IamRoleArn?: string,
     *     ProtectedResourceArns?: list<string>,
     *     ProtectedResourceConditions?: ProtectedResourceConditions,
     *     RestoreMetadataOverrides?: array<string, string>,
     *     ValidationWindowHours?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
