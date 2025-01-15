<?php

namespace Sunaoka\Aws\Structures\Iam\ListSAMLProviders\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property \Aws\Api\DateTimeResult|null $ValidUntil
 * @property \Aws\Api\DateTimeResult|null $CreateDate
 */
class SAMLProviderListEntry extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     ValidUntil?: \Aws\Api\DateTimeResult|null,
     *     CreateDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
