<?php

namespace Sunaoka\Aws\Structures\SesV2\SendEmail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TemplateName
 * @property string $TemplateArn
 * @property EmailTemplateContent $TemplateContent
 * @property string $TemplateData
 * @property list<MessageHeader> $Headers
 */
class Template extends Shape
{
    /**
     * @param array{
     *     TemplateName?: string,
     *     TemplateArn?: string,
     *     TemplateContent?: EmailTemplateContent,
     *     TemplateData?: string,
     *     Headers?: list<MessageHeader>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
