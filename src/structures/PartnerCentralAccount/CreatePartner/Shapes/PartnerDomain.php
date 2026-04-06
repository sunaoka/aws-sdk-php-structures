<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\CreatePartner\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DomainName
 * @property \Aws\Api\DateTimeResult $RegisteredAt
 */
class PartnerDomain extends Shape
{
    /**
     * @param array{
     *     DomainName: string,
     *     RegisteredAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
