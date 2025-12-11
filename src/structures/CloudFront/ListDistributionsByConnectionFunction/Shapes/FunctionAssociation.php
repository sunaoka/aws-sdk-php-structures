<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListDistributionsByConnectionFunction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FunctionARN
 * @property 'viewer-request'|'viewer-response'|'origin-request'|'origin-response' $EventType
 */
class FunctionAssociation extends Shape
{
    /**
     * @param array{
     *     FunctionARN: string,
     *     EventType: 'viewer-request'|'viewer-response'|'origin-request'|'origin-response'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
