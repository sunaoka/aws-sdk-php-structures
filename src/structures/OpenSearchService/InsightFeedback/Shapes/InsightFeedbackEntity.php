<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\InsightFeedback\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DomainName' $Type
 * @property string $Value
 */
class InsightFeedbackEntity extends Shape
{
    /**
     * @param array{
     *     Type: 'DomainName',
     *     Value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
