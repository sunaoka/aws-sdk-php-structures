<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $TemplateId
 * @property string $Name
 * @property int<1, max> $LatestVersionNumber
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 */
class TemplateSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     TemplateId?: string,
     *     Name?: string,
     *     LatestVersionNumber?: int<1, max>,
     *     CreatedTime?: \Aws\Api\DateTimeResult,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
