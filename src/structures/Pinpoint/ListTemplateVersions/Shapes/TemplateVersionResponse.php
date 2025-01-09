<?php

namespace Sunaoka\Aws\Structures\Pinpoint\ListTemplateVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CreationDate
 * @property string $DefaultSubstitutions
 * @property string $LastModifiedDate
 * @property string $TemplateDescription
 * @property string $TemplateName
 * @property string $TemplateType
 * @property string $Version
 */
class TemplateVersionResponse extends Shape
{
    /**
     * @param array{
     *     CreationDate: string,
     *     DefaultSubstitutions?: string,
     *     LastModifiedDate: string,
     *     TemplateDescription?: string,
     *     TemplateName: string,
     *     TemplateType: string,
     *     Version?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
