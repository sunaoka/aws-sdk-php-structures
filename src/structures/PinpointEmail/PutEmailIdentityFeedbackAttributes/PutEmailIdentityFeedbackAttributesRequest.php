<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\PutEmailIdentityFeedbackAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EmailIdentity
 * @property bool $EmailForwardingEnabled
 */
class PutEmailIdentityFeedbackAttributesRequest extends Request
{
    /**
     * @param array{
     *     EmailIdentity: string,
     *     EmailForwardingEnabled?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
