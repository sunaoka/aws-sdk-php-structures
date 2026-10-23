<?php

namespace Sunaoka\Aws\Structures\Continuum\GetCollectorDataAccessAuthorization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accountId
 * @property string $collectorId
 * @property string|null $environmentArn
 */
class GetCollectorDataAccessAuthorizationRequest extends Request
{
    /**
     * @param array{
     *     accountId: string,
     *     collectorId: string,
     *     environmentArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
