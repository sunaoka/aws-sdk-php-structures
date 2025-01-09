<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\ListTrustStores\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $trustStoreArn
 */
class TrustStoreSummary extends Shape
{
    /**
     * @param array{trustStoreArn?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
