<?php

namespace Sunaoka\Aws\Structures\Ses\ListCustomVerificationEmailTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TemplateName
 * @property string|null $FromEmailAddress
 * @property string|null $TemplateSubject
 * @property string|null $SuccessRedirectionURL
 * @property string|null $FailureRedirectionURL
 */
class CustomVerificationEmailTemplate extends Shape
{
    /**
     * @param array{
     *     TemplateName?: string|null,
     *     FromEmailAddress?: string|null,
     *     TemplateSubject?: string|null,
     *     SuccessRedirectionURL?: string|null,
     *     FailureRedirectionURL?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
