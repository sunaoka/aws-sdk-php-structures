<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListInvestigationRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FunctionName
 * @property string|null $FunctionArn
 * @property string|null $FunctionVersion
 * @property string|null $Role
 * @property string|null $Description
 * @property string|null $RevisionId
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 * @property string|null $VpcConfigurationSummary
 */
class LambdaFunction extends Shape
{
    /**
     * @param array{
     *     FunctionName?: string|null,
     *     FunctionArn?: string|null,
     *     FunctionVersion?: string|null,
     *     Role?: string|null,
     *     Description?: string|null,
     *     RevisionId?: string|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     VpcConfigurationSummary?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
