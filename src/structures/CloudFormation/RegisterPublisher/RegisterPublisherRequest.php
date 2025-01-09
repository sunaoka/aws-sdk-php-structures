<?php

namespace Sunaoka\Aws\Structures\CloudFormation\RegisterPublisher;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $AcceptTermsAndConditions
 * @property string $ConnectionArn
 */
class RegisterPublisherRequest extends Request
{
    /**
     * @param array{
     *     AcceptTermsAndConditions?: bool,
     *     ConnectionArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
