<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $TemplateId
 * @property Shapes\TemplateSourceEntity $SourceEntity
 * @property string $VersionDescription
 * @property string $Name
 * @property Shapes\TemplateVersionDefinition $Definition
 * @property Shapes\ValidationStrategy $ValidationStrategy
 */
class UpdateTemplateRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     TemplateId: string,
     *     SourceEntity?: Shapes\TemplateSourceEntity,
     *     VersionDescription?: string,
     *     Name?: string,
     *     Definition?: Shapes\TemplateVersionDefinition,
     *     ValidationStrategy?: Shapes\ValidationStrategy
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
