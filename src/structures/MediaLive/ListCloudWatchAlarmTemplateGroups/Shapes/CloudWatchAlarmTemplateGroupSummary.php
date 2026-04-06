<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListCloudWatchAlarmTemplateGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property string|null $Description
 * @property string $Id
 * @property \Aws\Api\DateTimeResult|null $ModifiedAt
 * @property string $Name
 * @property array<string, string>|null $Tags
 * @property int $TemplateCount
 */
class CloudWatchAlarmTemplateGroupSummary extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     CreatedAt: \Aws\Api\DateTimeResult,
     *     Description?: string|null,
     *     Id: string,
     *     ModifiedAt?: \Aws\Api\DateTimeResult|null,
     *     Name: string,
     *     Tags?: array<string, string>|null,
     *     TemplateCount: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
