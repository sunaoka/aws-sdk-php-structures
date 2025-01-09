<?php

namespace Sunaoka\Aws\Structures\Pipes\DescribePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BucketName
 * @property string $Prefix
 * @property string $BucketOwner
 * @property 'json'|'plain'|'w3c' $OutputFormat
 */
class S3LogDestination extends Shape
{
    /**
     * @param array{
     *     BucketName?: string,
     *     Prefix?: string,
     *     BucketOwner?: string,
     *     OutputFormat?: 'json'|'plain'|'w3c'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
