<?php

namespace Sunaoka\Aws\Structures\Connect\SearchWorkspaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Name
 * @property 'ALL'|'ASSIGNED'|'NONE'|null $Visibility
 * @property string|null $Description
 * @property string|null $Title
 * @property string|null $Arn
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property array<string, string>|null $Tags
 */
class WorkspaceSearchSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Name?: string|null,
     *     Visibility?: 'ALL'|'ASSIGNED'|'NONE'|null,
     *     Description?: string|null,
     *     Title?: string|null,
     *     Arn?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
