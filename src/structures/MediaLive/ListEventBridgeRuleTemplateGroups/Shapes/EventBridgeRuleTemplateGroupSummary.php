<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListEventBridgeRuleTemplateGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property string $Description
 * @property string $Id
 * @property \Aws\Api\DateTimeResult $ModifiedAt
 * @property string $Name
 * @property array<string, string> $Tags
 * @property int $TemplateCount
 */
class EventBridgeRuleTemplateGroupSummary extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     CreatedAt: \Aws\Api\DateTimeResult,
     *     Description?: string,
     *     Id: string,
     *     ModifiedAt?: \Aws\Api\DateTimeResult,
     *     Name: string,
     *     Tags?: array<string, string>,
     *     TemplateCount: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
