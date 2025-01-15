<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $TemplateId
 * @property string|null $Name
 * @property list<Shapes\ResourcePermission>|null $Permissions
 * @property Shapes\TemplateSourceEntity|null $SourceEntity
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $VersionDescription
 * @property Shapes\TemplateVersionDefinition|null $Definition
 * @property Shapes\ValidationStrategy|null $ValidationStrategy
 */
class CreateTemplateRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     TemplateId: string,
     *     Name?: string|null,
     *     Permissions?: list<Shapes\ResourcePermission>|null,
     *     SourceEntity?: Shapes\TemplateSourceEntity|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     VersionDescription?: string|null,
     *     Definition?: Shapes\TemplateVersionDefinition|null,
     *     ValidationStrategy?: Shapes\ValidationStrategy|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
