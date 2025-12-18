<?php

namespace Sunaoka\Aws\Structures\SesV2\CreateEmailTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TemplateName
 * @property Shapes\EmailTemplateContent $TemplateContent
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateEmailTemplateRequest extends Request
{
    /**
     * @param array{
     *     TemplateName: string,
     *     TemplateContent: Shapes\EmailTemplateContent,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
