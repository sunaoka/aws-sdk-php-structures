<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeInboundConnections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OwnerId
 * @property string $DomainName
 * @property string $Region
 */
class AWSDomainInformation extends Shape
{
    /**
     * @param array{
     *     OwnerId?: string,
     *     DomainName: string,
     *     Region?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
