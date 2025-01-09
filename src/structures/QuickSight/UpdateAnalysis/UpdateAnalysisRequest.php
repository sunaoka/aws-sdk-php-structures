<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $AnalysisId
 * @property string $Name
 * @property Shapes\Parameters $Parameters
 * @property Shapes\AnalysisSourceEntity $SourceEntity
 * @property string $ThemeArn
 * @property Shapes\AnalysisDefinition $Definition
 * @property Shapes\ValidationStrategy $ValidationStrategy
 */
class UpdateAnalysisRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     AnalysisId: string,
     *     Name: string,
     *     Parameters?: Shapes\Parameters,
     *     SourceEntity?: Shapes\AnalysisSourceEntity,
     *     ThemeArn?: string,
     *     Definition?: Shapes\AnalysisDefinition,
     *     ValidationStrategy?: Shapes\ValidationStrategy
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
