<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\ListIdentitySources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $createdDate
 * @property IdentitySourceItemDetails $details
 * @property string $identitySourceId
 * @property \Aws\Api\DateTimeResult $lastUpdatedDate
 * @property string $policyStoreId
 * @property string $principalEntityType
 * @property ConfigurationItem $configuration
 */
class IdentitySourceItem extends Shape
{
    /**
     * @param array{
     *     createdDate: \Aws\Api\DateTimeResult,
     *     details?: IdentitySourceItemDetails,
     *     identitySourceId: string,
     *     lastUpdatedDate: \Aws\Api\DateTimeResult,
     *     policyStoreId: string,
     *     principalEntityType: string,
     *     configuration?: ConfigurationItem
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
