<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Name
 * @property TemplateVersion $Version
 * @property string $TemplateId
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 * @property \Aws\Api\DateTimeResult $CreatedTime
 */
class Template extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     Name?: string,
     *     Version?: TemplateVersion,
     *     TemplateId?: string,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult,
     *     CreatedTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
