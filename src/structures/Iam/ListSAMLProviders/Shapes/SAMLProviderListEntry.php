<?php

namespace Sunaoka\Aws\Structures\Iam\ListSAMLProviders\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult $ValidUntil
 * @property \Aws\Api\DateTimeResult $CreateDate
 */
class SAMLProviderListEntry extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     ValidUntil?: \Aws\Api\DateTimeResult,
     *     CreateDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
