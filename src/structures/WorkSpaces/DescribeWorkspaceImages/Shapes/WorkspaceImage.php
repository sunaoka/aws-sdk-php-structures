<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeWorkspaceImages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ImageId
 * @property string|null $Name
 * @property string|null $Description
 * @property OperatingSystem|null $OperatingSystem
 * @property 'AVAILABLE'|'PENDING'|'ERROR'|null $State
 * @property 'DEFAULT'|'DEDICATED'|null $RequiredTenancy
 * @property string|null $ErrorCode
 * @property string|null $ErrorMessage
 * @property \Aws\Api\DateTimeResult|null $Created
 * @property string|null $OwnerAccountId
 * @property UpdateResult|null $Updates
 * @property list<ErrorDetails>|null $ErrorDetails
 */
class WorkspaceImage extends Shape
{
    /**
     * @param array{
     *     ImageId?: string|null,
     *     Name?: string|null,
     *     Description?: string|null,
     *     OperatingSystem?: OperatingSystem|null,
     *     State?: 'AVAILABLE'|'PENDING'|'ERROR'|null,
     *     RequiredTenancy?: 'DEFAULT'|'DEDICATED'|null,
     *     ErrorCode?: string|null,
     *     ErrorMessage?: string|null,
     *     Created?: \Aws\Api\DateTimeResult|null,
     *     OwnerAccountId?: string|null,
     *     Updates?: UpdateResult|null,
     *     ErrorDetails?: list<ErrorDetails>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
