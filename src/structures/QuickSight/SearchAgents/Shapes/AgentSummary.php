<?php

namespace Sunaoka\Aws\Structures\QuickSight\SearchAgents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $AgentId
 * @property string $Name
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 * @property string|null $IconId
 */
class AgentSummary extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     AgentId: string,
     *     Name: string,
     *     Description?: string|null,
     *     CreatedAt: \Aws\Api\DateTimeResult,
     *     UpdatedAt: \Aws\Api\DateTimeResult,
     *     IconId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
