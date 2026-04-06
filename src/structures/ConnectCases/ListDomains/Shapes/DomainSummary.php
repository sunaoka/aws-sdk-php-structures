<?php

namespace Sunaoka\Aws\Structures\ConnectCases\ListDomains\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $domainId
 * @property string $domainArn
 * @property string $name
 */
class DomainSummary extends Shape
{
    /**
     * @param array{
     *     domainId: string,
     *     domainArn: string,
     *     name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
