<?php

namespace Sunaoka\Aws\Structures\Acm\PutAccountConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ExpiryEventsConfiguration $ExpiryEvents
 * @property string $IdempotencyToken
 */
class PutAccountConfigurationRequest extends Request
{
    /**
     * @param array{
     *     ExpiryEvents?: Shapes\ExpiryEventsConfiguration,
     *     IdempotencyToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
