<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CustomResponseBodyKey
 * @property int $ResponseCode
 * @property list<AwsWafv2CustomHttpHeader> $ResponseHeaders
 */
class AwsWafv2CustomResponseDetails extends Shape
{
    /**
     * @param array{
     *     CustomResponseBodyKey?: string,
     *     ResponseCode?: int,
     *     ResponseHeaders?: list<AwsWafv2CustomHttpHeader>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
