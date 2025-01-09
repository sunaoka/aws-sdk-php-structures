<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketCors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CORSRule> $CORSRules
 */
class CORSConfiguration extends Shape
{
    /**
     * @param array{CORSRules: list<CORSRule>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
