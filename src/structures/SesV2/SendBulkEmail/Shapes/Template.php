<?php

namespace Sunaoka\Aws\Structures\SesV2\SendBulkEmail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TemplateName
 * @property string|null $TemplateArn
 * @property EmailTemplateContent|null $TemplateContent
 * @property string|null $TemplateData
 * @property list<MessageHeader>|null $Headers
 * @property list<Attachment>|null $Attachments
 */
class Template extends Shape
{
    /**
     * @param array{
     *     TemplateName?: string|null,
     *     TemplateArn?: string|null,
     *     TemplateContent?: EmailTemplateContent|null,
     *     TemplateData?: string|null,
     *     Headers?: list<MessageHeader>|null,
     *     Attachments?: list<Attachment>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
