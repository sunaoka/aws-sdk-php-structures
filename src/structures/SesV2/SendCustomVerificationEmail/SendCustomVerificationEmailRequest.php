<?php

namespace Sunaoka\Aws\Structures\SesV2\SendCustomVerificationEmail;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EmailAddress
 * @property string $TemplateName
 * @property string|null $ConfigurationSetName
 */
class SendCustomVerificationEmailRequest extends Request
{
    /**
     * @param array{
     *     EmailAddress: string,
     *     TemplateName: string,
     *     ConfigurationSetName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
