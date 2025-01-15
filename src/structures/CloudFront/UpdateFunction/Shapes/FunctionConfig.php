<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateFunction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Comment
 * @property 'cloudfront-js-1.0'|'cloudfront-js-2.0' $Runtime
 * @property KeyValueStoreAssociations|null $KeyValueStoreAssociations
 */
class FunctionConfig extends Shape
{
    /**
     * @param array{
     *     Comment: string,
     *     Runtime: 'cloudfront-js-1.0'|'cloudfront-js-2.0',
     *     KeyValueStoreAssociations?: KeyValueStoreAssociations|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
