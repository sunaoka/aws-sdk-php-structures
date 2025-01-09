<?php

namespace Sunaoka\Aws\Structures\Ses\ListCustomVerificationEmailTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TemplateName
 * @property string $FromEmailAddress
 * @property string $TemplateSubject
 * @property string $SuccessRedirectionURL
 * @property string $FailureRedirectionURL
 */
class CustomVerificationEmailTemplate extends Shape
{
    /**
     * @param array{
     *     TemplateName?: string,
     *     FromEmailAddress?: string,
     *     TemplateSubject?: string,
     *     SuccessRedirectionURL?: string,
     *     FailureRedirectionURL?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
