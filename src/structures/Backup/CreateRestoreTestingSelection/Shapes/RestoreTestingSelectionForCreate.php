<?php

namespace Sunaoka\Aws\Structures\Backup\CreateRestoreTestingSelection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IamRoleArn
 * @property list<string>|null $ProtectedResourceArns
 * @property ProtectedResourceConditions|null $ProtectedResourceConditions
 * @property string $ProtectedResourceType
 * @property array<string, string>|null $RestoreMetadataOverrides
 * @property string $RestoreTestingSelectionName
 * @property int|null $ValidationWindowHours
 */
class RestoreTestingSelectionForCreate extends Shape
{
    /**
     * @param array{
     *     IamRoleArn: string,
     *     ProtectedResourceArns?: list<string>|null,
     *     ProtectedResourceConditions?: ProtectedResourceConditions|null,
     *     ProtectedResourceType: string,
     *     RestoreMetadataOverrides?: array<string, string>|null,
     *     RestoreTestingSelectionName: string,
     *     ValidationWindowHours?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
