<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $AnalysisId
 * @property string $Name
 * @property Shapes\Parameters|null $Parameters
 * @property list<Shapes\ResourcePermission>|null $Permissions
 * @property Shapes\AnalysisSourceEntity|null $SourceEntity
 * @property string|null $ThemeArn
 * @property list<Shapes\Tag>|null $Tags
 * @property Shapes\AnalysisDefinition|null $Definition
 * @property Shapes\ValidationStrategy|null $ValidationStrategy
 * @property list<string>|null $FolderArns
 */
class CreateAnalysisRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     AnalysisId: string,
     *     Name: string,
     *     Parameters?: Shapes\Parameters|null,
     *     Permissions?: list<Shapes\ResourcePermission>|null,
     *     SourceEntity?: Shapes\AnalysisSourceEntity|null,
     *     ThemeArn?: string|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     Definition?: Shapes\AnalysisDefinition|null,
     *     ValidationStrategy?: Shapes\ValidationStrategy|null,
     *     FolderArns?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
