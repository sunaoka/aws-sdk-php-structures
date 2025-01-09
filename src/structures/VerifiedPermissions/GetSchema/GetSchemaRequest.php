<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\GetSchema;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyStoreId
 */
class GetSchemaRequest extends Request
{
    /**
     * @param array{policyStoreId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
