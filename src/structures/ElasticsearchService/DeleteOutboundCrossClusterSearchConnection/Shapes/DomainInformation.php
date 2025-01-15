<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\DeleteOutboundCrossClusterSearchConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $OwnerId
 * @property string $DomainName
 * @property string|null $Region
 */
class DomainInformation extends Shape
{
    /**
     * @param array{
     *     OwnerId?: string|null,
     *     DomainName: string,
     *     Region?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
