<?php

namespace Sunaoka\Aws\Structures\Ses\SetIdentityFeedbackForwardingEnabled;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identity
 * @property bool $ForwardingEnabled
 */
class SetIdentityFeedbackForwardingEnabledRequest extends Request
{
    /**
     * @param array{
     *     Identity: string,
     *     ForwardingEnabled: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
