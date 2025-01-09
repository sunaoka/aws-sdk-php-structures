<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListTemplateVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property int<1, max> $VersionNumber
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property 'CREATION_IN_PROGRESS'|'CREATION_SUCCESSFUL'|'CREATION_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_SUCCESSFUL'|'UPDATE_FAILED'|'DELETED' $Status
 * @property string $Description
 */
class TemplateVersionSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     VersionNumber?: int<1, max>,
     *     CreatedTime?: \Aws\Api\DateTimeResult,
     *     Status?: 'CREATION_IN_PROGRESS'|'CREATION_SUCCESSFUL'|'CREATION_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_SUCCESSFUL'|'UPDATE_FAILED'|'DELETED',
     *     Description?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
