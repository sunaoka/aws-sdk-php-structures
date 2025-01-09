<?php

namespace Sunaoka\Aws\Structures\Backup\CreateRestoreTestingSelection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IamRoleArn
 * @property list<string> $ProtectedResourceArns
 * @property ProtectedResourceConditions $ProtectedResourceConditions
 * @property string $ProtectedResourceType
 * @property array<string, string> $RestoreMetadataOverrides
 * @property string $RestoreTestingSelectionName
 * @property int $ValidationWindowHours
 */
class RestoreTestingSelectionForCreate extends Shape
{
    /**
     * @param array{
     *     IamRoleArn: string,
     *     ProtectedResourceArns?: list<string>,
     *     ProtectedResourceConditions?: ProtectedResourceConditions,
     *     ProtectedResourceType: string,
     *     RestoreMetadataOverrides?: array<string, string>,
     *     RestoreTestingSelectionName: string,
     *     ValidationWindowHours?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
