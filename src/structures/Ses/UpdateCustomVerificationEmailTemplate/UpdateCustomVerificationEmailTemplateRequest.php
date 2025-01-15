<?php

namespace Sunaoka\Aws\Structures\Ses\UpdateCustomVerificationEmailTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TemplateName
 * @property string|null $FromEmailAddress
 * @property string|null $TemplateSubject
 * @property string|null $TemplateContent
 * @property string|null $SuccessRedirectionURL
 * @property string|null $FailureRedirectionURL
 */
class UpdateCustomVerificationEmailTemplateRequest extends Request
{
    /**
     * @param array{
     *     TemplateName: string,
     *     FromEmailAddress?: string|null,
     *     TemplateSubject?: string|null,
     *     TemplateContent?: string|null,
     *     SuccessRedirectionURL?: string|null,
     *     FailureRedirectionURL?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
