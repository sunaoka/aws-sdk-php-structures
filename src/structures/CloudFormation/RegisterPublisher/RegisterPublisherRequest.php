<?php

namespace Sunaoka\Aws\Structures\CloudFormation\RegisterPublisher;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $AcceptTermsAndConditions
 * @property string|null $ConnectionArn
 */
class RegisterPublisherRequest extends Request
{
    /**
     * @param array{
     *     AcceptTermsAndConditions?: bool|null,
     *     ConnectionArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
