<?php

namespace Sunaoka\Aws\Structures\Iot\ConfirmTopicRuleDestination;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $confirmationToken
 */
class ConfirmTopicRuleDestinationRequest extends Request
{
    /**
     * @param array{confirmationToken: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
