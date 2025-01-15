<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CustomResponseBodyKey
 * @property int|null $ResponseCode
 * @property list<AwsWafv2CustomHttpHeader>|null $ResponseHeaders
 */
class AwsWafv2CustomResponseDetails extends Shape
{
    /**
     * @param array{
     *     CustomResponseBodyKey?: string|null,
     *     ResponseCode?: int|null,
     *     ResponseHeaders?: list<AwsWafv2CustomHttpHeader>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
