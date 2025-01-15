<?php

namespace Sunaoka\Aws\Structures\Pinpoint\ListTemplateVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CreationDate
 * @property string|null $DefaultSubstitutions
 * @property string $LastModifiedDate
 * @property string|null $TemplateDescription
 * @property string $TemplateName
 * @property string $TemplateType
 * @property string|null $Version
 */
class TemplateVersionResponse extends Shape
{
    /**
     * @param array{
     *     CreationDate: string,
     *     DefaultSubstitutions?: string|null,
     *     LastModifiedDate: string,
     *     TemplateDescription?: string|null,
     *     TemplateName: string,
     *     TemplateType: string,
     *     Version?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
