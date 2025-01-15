<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\ListTrustStores\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $trustStoreArn
 */
class TrustStoreSummary extends Shape
{
    /**
     * @param array{trustStoreArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
