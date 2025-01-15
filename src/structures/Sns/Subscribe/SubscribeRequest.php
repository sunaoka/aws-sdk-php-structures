<?php

namespace Sunaoka\Aws\Structures\Sns\Subscribe;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TopicArn
 * @property string $Protocol
 * @property string|null $Endpoint
 * @property array<string, string>|null $Attributes
 * @property bool|null $ReturnSubscriptionArn
 */
class SubscribeRequest extends Request
{
    /**
     * @param array{
     *     TopicArn: string,
     *     Protocol: string,
     *     Endpoint?: string|null,
     *     Attributes?: array<string, string>|null,
     *     ReturnSubscriptionArn?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
