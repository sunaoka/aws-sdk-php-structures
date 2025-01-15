<?php

namespace Sunaoka\Aws\Structures\Backup\UpdateRestoreTestingSelection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $IamRoleArn
 * @property list<string>|null $ProtectedResourceArns
 * @property ProtectedResourceConditions|null $ProtectedResourceConditions
 * @property array<string, string>|null $RestoreMetadataOverrides
 * @property int|null $ValidationWindowHours
 */
class RestoreTestingSelectionForUpdate extends Shape
{
    /**
     * @param array{
     *     IamRoleArn?: string|null,
     *     ProtectedResourceArns?: list<string>|null,
     *     ProtectedResourceConditions?: ProtectedResourceConditions|null,
     *     RestoreMetadataOverrides?: array<string, string>|null,
     *     ValidationWindowHours?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
