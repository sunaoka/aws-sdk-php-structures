<?php

namespace Sunaoka\Aws\Structures\SesV2\PutEmailIdentityMailFromAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EmailIdentity
 * @property string $MailFromDomain
 * @property 'USE_DEFAULT_VALUE'|'REJECT_MESSAGE' $BehaviorOnMxFailure
 */
class PutEmailIdentityMailFromAttributesRequest extends Request
{
    /**
     * @param array{
     *     EmailIdentity: string,
     *     MailFromDomain?: string,
     *     BehaviorOnMxFailure?: 'USE_DEFAULT_VALUE'|'REJECT_MESSAGE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
