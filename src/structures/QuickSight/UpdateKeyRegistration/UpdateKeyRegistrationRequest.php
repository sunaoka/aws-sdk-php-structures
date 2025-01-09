<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateKeyRegistration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property list<Shapes\RegisteredCustomerManagedKey> $KeyRegistration
 */
class UpdateKeyRegistrationRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     KeyRegistration: list<Shapes\RegisteredCustomerManagedKey>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
