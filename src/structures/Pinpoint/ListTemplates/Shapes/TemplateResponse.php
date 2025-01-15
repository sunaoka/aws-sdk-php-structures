<?php

namespace Sunaoka\Aws\Structures\Pinpoint\ListTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string $CreationDate
 * @property string|null $DefaultSubstitutions
 * @property string $LastModifiedDate
 * @property array<string, string>|null $tags
 * @property string|null $TemplateDescription
 * @property string $TemplateName
 * @property 'EMAIL'|'SMS'|'VOICE'|'PUSH'|'INAPP' $TemplateType
 * @property string|null $Version
 */
class TemplateResponse extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     CreationDate: string,
     *     DefaultSubstitutions?: string|null,
     *     LastModifiedDate: string,
     *     tags?: array<string, string>|null,
     *     TemplateDescription?: string|null,
     *     TemplateName: string,
     *     TemplateType: 'EMAIL'|'SMS'|'VOICE'|'PUSH'|'INAPP',
     *     Version?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
