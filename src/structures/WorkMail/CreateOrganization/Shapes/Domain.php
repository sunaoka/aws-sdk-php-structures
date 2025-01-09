<?php

namespace Sunaoka\Aws\Structures\WorkMail\CreateOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DomainName
 * @property string $HostedZoneId
 */
class Domain extends Shape
{
    /**
     * @param array{
     *     DomainName: string,
     *     HostedZoneId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
