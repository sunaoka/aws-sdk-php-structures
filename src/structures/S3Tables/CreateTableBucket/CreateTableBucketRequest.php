<?php

namespace Sunaoka\Aws\Structures\S3Tables\CreateTableBucket;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 */
class CreateTableBucketRequest extends Request
{
    /**
     * @param array{name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
