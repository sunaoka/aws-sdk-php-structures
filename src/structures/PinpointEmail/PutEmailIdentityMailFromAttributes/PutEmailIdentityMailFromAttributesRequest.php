<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\PutEmailIdentityMailFromAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EmailIdentity
 * @property string|null $MailFromDomain
 * @property 'USE_DEFAULT_VALUE'|'REJECT_MESSAGE'|null $BehaviorOnMxFailure
 */
class PutEmailIdentityMailFromAttributesRequest extends Request
{
    /**
     * @param array{
     *     EmailIdentity: string,
     *     MailFromDomain?: string|null,
     *     BehaviorOnMxFailure?: 'USE_DEFAULT_VALUE'|'REJECT_MESSAGE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
