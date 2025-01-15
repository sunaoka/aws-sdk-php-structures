<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListCheckSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Name
 * @property 'TRUSTED_ADVISOR'|null $Provider
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 * @property string|null $LensArn
 * @property string|null $PillarId
 * @property string|null $QuestionId
 * @property string|null $ChoiceId
 * @property 'OKAY'|'WARNING'|'ERROR'|'NOT_AVAILABLE'|'FETCH_FAILED'|null $Status
 * @property array<'OKAY'|'WARNING'|'ERROR'|'NOT_AVAILABLE'|'FETCH_FAILED', int<1, 101>>|null $AccountSummary
 */
class CheckSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Name?: string|null,
     *     Provider?: 'TRUSTED_ADVISOR'|null,
     *     Description?: string|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     LensArn?: string|null,
     *     PillarId?: string|null,
     *     QuestionId?: string|null,
     *     ChoiceId?: string|null,
     *     Status?: 'OKAY'|'WARNING'|'ERROR'|'NOT_AVAILABLE'|'FETCH_FAILED'|null,
     *     AccountSummary?: array<'OKAY'|'WARNING'|'ERROR'|'NOT_AVAILABLE'|'FETCH_FAILED', int<1, 101>>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
