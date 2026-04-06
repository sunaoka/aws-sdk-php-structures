<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeWorkspace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ALL'|'ASSIGNED'|'NONE'|null $Visibility
 * @property string $Id
 * @property string $Name
 * @property string $Arn
 * @property string|null $Description
 * @property WorkspaceTheme|null $Theme
 * @property string|null $Title
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property string|null $LastModifiedRegion
 * @property array<string, string>|null $Tags
 */
class Workspace extends Shape
{
    /**
     * @param array{
     *     Visibility?: 'ALL'|'ASSIGNED'|'NONE'|null,
     *     Id: string,
     *     Name: string,
     *     Arn: string,
     *     Description?: string|null,
     *     Theme?: WorkspaceTheme|null,
     *     Title?: string|null,
     *     LastModifiedTime: \Aws\Api\DateTimeResult,
     *     LastModifiedRegion?: string|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
