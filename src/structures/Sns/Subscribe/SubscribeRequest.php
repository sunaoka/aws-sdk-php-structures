<?php

namespace Sunaoka\Aws\Structures\Sns\Subscribe;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TopicArn
 * @property string $Protocol
 * @property string $Endpoint
 * @property array<string, string> $Attributes
 * @property bool $ReturnSubscriptionArn
 */
class SubscribeRequest extends Request
{
    /**
     * @param array{
     *     TopicArn: string,
     *     Protocol: string,
     *     Endpoint?: string,
     *     Attributes?: array<string, string>,
     *     ReturnSubscriptionArn?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
