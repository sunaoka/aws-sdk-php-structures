<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $Name
 * @property TemplateVersion|null $Version
 * @property string|null $TemplateId
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 */
class Template extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     Name?: string|null,
     *     Version?: TemplateVersion|null,
     *     TemplateId?: string|null,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult|null,
     *     CreatedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
