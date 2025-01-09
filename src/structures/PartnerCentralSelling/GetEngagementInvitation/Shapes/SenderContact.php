<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetEngagementInvitation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BusinessTitle
 * @property string $Email
 * @property string $FirstName
 * @property string $LastName
 * @property string $Phone
 */
class SenderContact extends Shape
{
    /**
     * @param array{
     *     BusinessTitle?: string,
     *     Email: string,
     *     FirstName?: string,
     *     LastName?: string,
     *     Phone?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
