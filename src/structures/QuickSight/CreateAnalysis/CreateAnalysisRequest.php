<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $AnalysisId
 * @property string $Name
 * @property Shapes\Parameters $Parameters
 * @property list<Shapes\ResourcePermission> $Permissions
 * @property Shapes\AnalysisSourceEntity $SourceEntity
 * @property string $ThemeArn
 * @property list<Shapes\Tag> $Tags
 * @property Shapes\AnalysisDefinition $Definition
 * @property Shapes\ValidationStrategy $ValidationStrategy
 * @property list<string> $FolderArns
 */
class CreateAnalysisRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     AnalysisId: string,
     *     Name: string,
     *     Parameters?: Shapes\Parameters,
     *     Permissions?: list<Shapes\ResourcePermission>,
     *     SourceEntity?: Shapes\AnalysisSourceEntity,
     *     ThemeArn?: string,
     *     Tags?: list<Shapes\Tag>,
     *     Definition?: Shapes\AnalysisDefinition,
     *     ValidationStrategy?: Shapes\ValidationStrategy,
     *     FolderArns?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
