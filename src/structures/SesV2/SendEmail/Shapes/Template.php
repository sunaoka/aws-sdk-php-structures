<?php

namespace Sunaoka\Aws\Structures\SesV2\SendEmail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TemplateName
 * @property string|null $TemplateArn
 * @property EmailTemplateContent|null $TemplateContent
 * @property string|null $TemplateData
 * @property list<MessageHeader>|null $Headers
 */
class Template extends Shape
{
    /**
     * @param array{
     *     TemplateName?: string|null,
     *     TemplateArn?: string|null,
     *     TemplateContent?: EmailTemplateContent|null,
     *     TemplateData?: string|null,
     *     Headers?: list<MessageHeader>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
