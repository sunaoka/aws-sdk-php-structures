<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListCheckSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Name
 * @property 'TRUSTED_ADVISOR' $Provider
 * @property string $Description
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 * @property string $LensArn
 * @property string $PillarId
 * @property string $QuestionId
 * @property string $ChoiceId
 * @property 'OKAY'|'WARNING'|'ERROR'|'NOT_AVAILABLE'|'FETCH_FAILED' $Status
 * @property array<'OKAY'|'WARNING'|'ERROR'|'NOT_AVAILABLE'|'FETCH_FAILED', int> $AccountSummary
 */
class CheckSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Name?: string,
     *     Provider?: 'TRUSTED_ADVISOR',
     *     Description?: string,
     *     UpdatedAt?: \Aws\Api\DateTimeResult,
     *     LensArn?: string,
     *     PillarId?: string,
     *     QuestionId?: string,
     *     ChoiceId?: string,
     *     Status?: 'OKAY'|'WARNING'|'ERROR'|'NOT_AVAILABLE'|'FETCH_FAILED',
     *     AccountSummary?: array<'OKAY'|'WARNING'|'ERROR'|'NOT_AVAILABLE'|'FETCH_FAILED', int>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
