<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\AcceptInboundCrossClusterSearchConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OwnerId
 * @property string $DomainName
 * @property string $Region
 */
class DomainInformation extends Shape
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
