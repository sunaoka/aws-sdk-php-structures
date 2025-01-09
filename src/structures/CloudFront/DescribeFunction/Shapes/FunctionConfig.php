<?php

namespace Sunaoka\Aws\Structures\CloudFront\DescribeFunction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Comment
 * @property 'cloudfront-js-1.0'|'cloudfront-js-2.0' $Runtime
 * @property KeyValueStoreAssociations $KeyValueStoreAssociations
 */
class FunctionConfig extends Shape
{
    /**
     * @param array{
     *     Comment: string,
     *     Runtime: 'cloudfront-js-1.0'|'cloudfront-js-2.0',
     *     KeyValueStoreAssociations?: KeyValueStoreAssociations
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
