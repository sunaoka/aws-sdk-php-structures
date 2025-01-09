<?php

namespace Sunaoka\Aws\Structures\ConnectCases\ListDomains\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $domainArn
 * @property string $domainId
 * @property string $name
 */
class DomainSummary extends Shape
{
    /**
     * @param array{
     *     domainArn: string,
     *     domainId: string,
     *     name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
