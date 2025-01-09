<?php

namespace Sunaoka\Aws\Structures\Ses\SendCustomVerificationEmail;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EmailAddress
 * @property string $TemplateName
 * @property string $ConfigurationSetName
 */
class SendCustomVerificationEmailRequest extends Request
{
    /**
     * @param array{
     *     EmailAddress: string,
     *     TemplateName: string,
     *     ConfigurationSetName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
