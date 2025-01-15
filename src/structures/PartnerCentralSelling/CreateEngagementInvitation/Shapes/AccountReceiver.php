<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\CreateEngagementInvitation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Alias
 * @property string $AwsAccountId
 */
class AccountReceiver extends Shape
{
    /**
     * @param array{
     *     Alias?: string|null,
     *     AwsAccountId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
