<?php

namespace Sunaoka\Aws\Structures\ApiGateway\UpdateAccount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\PatchOperation>|null $patchOperations
 */
class UpdateAccountRequest extends Request
{
    /**
     * @param array{patchOperations?: list<Shapes\PatchOperation>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
