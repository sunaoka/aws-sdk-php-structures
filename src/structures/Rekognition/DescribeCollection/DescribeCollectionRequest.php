<?php

namespace Sunaoka\Aws\Structures\Rekognition\DescribeCollection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CollectionId
 */
class DescribeCollectionRequest extends Request
{
    /**
     * @param array{CollectionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
