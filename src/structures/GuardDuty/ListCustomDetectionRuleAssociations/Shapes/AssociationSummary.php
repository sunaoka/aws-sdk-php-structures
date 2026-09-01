<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListCustomDetectionRuleAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AssociationId
 * @property string $Arn
 * @property string $RuleId
 * @property 'LIVE'|'DRY_RUN' $Mode
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 * @property \Aws\Api\DateTimeResult|null $ExpiresAt
 */
class AssociationSummary extends Shape
{
    /**
     * @param array{
     *     AssociationId: string,
     *     Arn: string,
     *     RuleId: string,
     *     Mode: 'LIVE'|'DRY_RUN',
     *     CreatedAt: \Aws\Api\DateTimeResult,
     *     UpdatedAt: \Aws\Api\DateTimeResult,
     *     ExpiresAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
