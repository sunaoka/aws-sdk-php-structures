<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $TemplateId
 * @property Shapes\TemplateSourceEntity|null $SourceEntity
 * @property string|null $VersionDescription
 * @property string|null $Name
 * @property Shapes\TemplateVersionDefinition|null $Definition
 */
class UpdateTemplateRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     TemplateId: string,
     *     SourceEntity?: Shapes\TemplateSourceEntity|null,
     *     VersionDescription?: string|null,
     *     Name?: string|null,
     *     Definition?: Shapes\TemplateVersionDefinition|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
