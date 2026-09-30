<?php

namespace Sunaoka\Aws\Structures\IdentityStore\UpdateIdentityStore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IdentityStoreId
 * @property Shapes\NetworkConfiguration|null $NetworkConfiguration
 */
class UpdateIdentityStoreRequest extends Request
{
    /**
     * @param array{
     *     IdentityStoreId: string,
     *     NetworkConfiguration?: Shapes\NetworkConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
