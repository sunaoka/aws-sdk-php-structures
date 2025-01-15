<?php

namespace Sunaoka\Aws\Structures\Acm\PutAccountConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ExpiryEventsConfiguration|null $ExpiryEvents
 * @property string $IdempotencyToken
 */
class PutAccountConfigurationRequest extends Request
{
    /**
     * @param array{
     *     ExpiryEvents?: Shapes\ExpiryEventsConfiguration|null,
     *     IdempotencyToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
