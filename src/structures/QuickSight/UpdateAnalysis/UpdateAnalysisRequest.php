<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $AnalysisId
 * @property string $Name
 * @property Shapes\Parameters|null $Parameters
 * @property Shapes\AnalysisSourceEntity|null $SourceEntity
 * @property string|null $ThemeArn
 * @property Shapes\AnalysisDefinition|null $Definition
 * @property Shapes\ValidationStrategy|null $ValidationStrategy
 */
class UpdateAnalysisRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     AnalysisId: string,
     *     Name: string,
     *     Parameters?: Shapes\Parameters|null,
     *     SourceEntity?: Shapes\AnalysisSourceEntity|null,
     *     ThemeArn?: string|null,
     *     Definition?: Shapes\AnalysisDefinition|null,
     *     ValidationStrategy?: Shapes\ValidationStrategy|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
