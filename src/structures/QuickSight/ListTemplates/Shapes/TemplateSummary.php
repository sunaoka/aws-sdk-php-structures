<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $TemplateId
 * @property string|null $Name
 * @property int<1, max>|null $LatestVersionNumber
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 */
class TemplateSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     TemplateId?: string|null,
     *     Name?: string|null,
     *     LatestVersionNumber?: int<1, max>|null,
     *     CreatedTime?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
