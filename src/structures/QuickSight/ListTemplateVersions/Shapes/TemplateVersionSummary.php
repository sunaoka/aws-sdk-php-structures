<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListTemplateVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property int<1, max>|null $VersionNumber
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property 'CREATION_IN_PROGRESS'|'CREATION_SUCCESSFUL'|'CREATION_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_SUCCESSFUL'|'UPDATE_FAILED'|'DELETED'|null $Status
 * @property string|null $Description
 */
class TemplateVersionSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     VersionNumber?: int<1, max>|null,
     *     CreatedTime?: \Aws\Api\DateTimeResult|null,
     *     Status?: 'CREATION_IN_PROGRESS'|'CREATION_SUCCESSFUL'|'CREATION_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_SUCCESSFUL'|'UPDATE_FAILED'|'DELETED'|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
