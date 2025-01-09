<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $TemplateId
 * @property string $Name
 * @property list<Shapes\ResourcePermission> $Permissions
 * @property Shapes\TemplateSourceEntity $SourceEntity
 * @property list<Shapes\Tag> $Tags
 * @property string $VersionDescription
 * @property Shapes\TemplateVersionDefinition $Definition
 * @property Shapes\ValidationStrategy $ValidationStrategy
 */
class CreateTemplateRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     TemplateId: string,
     *     Name?: string,
     *     Permissions?: list<Shapes\ResourcePermission>,
     *     SourceEntity?: Shapes\TemplateSourceEntity,
     *     Tags?: list<Shapes\Tag>,
     *     VersionDescription?: string,
     *     Definition?: Shapes\TemplateVersionDefinition,
     *     ValidationStrategy?: Shapes\ValidationStrategy
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
