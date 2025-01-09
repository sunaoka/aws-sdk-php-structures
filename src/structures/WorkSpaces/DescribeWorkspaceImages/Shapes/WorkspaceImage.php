<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeWorkspaceImages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ImageId
 * @property string $Name
 * @property string $Description
 * @property OperatingSystem $OperatingSystem
 * @property 'AVAILABLE'|'PENDING'|'ERROR' $State
 * @property 'DEFAULT'|'DEDICATED' $RequiredTenancy
 * @property string $ErrorCode
 * @property string $ErrorMessage
 * @property \Aws\Api\DateTimeResult $Created
 * @property string $OwnerAccountId
 * @property UpdateResult $Updates
 * @property list<ErrorDetails> $ErrorDetails
 */
class WorkspaceImage extends Shape
{
    /**
     * @param array{
     *     ImageId?: string,
     *     Name?: string,
     *     Description?: string,
     *     OperatingSystem?: OperatingSystem,
     *     State?: 'AVAILABLE'|'PENDING'|'ERROR',
     *     RequiredTenancy?: 'DEFAULT'|'DEDICATED',
     *     ErrorCode?: string,
     *     ErrorMessage?: string,
     *     Created?: \Aws\Api\DateTimeResult,
     *     OwnerAccountId?: string,
     *     Updates?: UpdateResult,
     *     ErrorDetails?: list<ErrorDetails>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
