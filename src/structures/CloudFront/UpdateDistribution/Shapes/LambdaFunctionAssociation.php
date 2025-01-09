<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateDistribution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LambdaFunctionARN
 * @property 'viewer-request'|'viewer-response'|'origin-request'|'origin-response' $EventType
 * @property bool $IncludeBody
 */
class LambdaFunctionAssociation extends Shape
{
    /**
     * @param array{
     *     LambdaFunctionARN: string,
     *     EventType: 'viewer-request'|'viewer-response'|'origin-request'|'origin-response',
     *     IncludeBody?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
