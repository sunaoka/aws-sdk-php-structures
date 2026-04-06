<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\ListInsights\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Account'|'DomainName' $Type
 * @property string|null $Value
 */
class InsightEntity extends Shape
{
    /**
     * @param array{
     *     Type: 'Account'|'DomainName',
     *     Value?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
