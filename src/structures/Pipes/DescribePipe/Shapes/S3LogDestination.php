<?php

namespace Sunaoka\Aws\Structures\Pipes\DescribePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $BucketName
 * @property string|null $Prefix
 * @property string|null $BucketOwner
 * @property 'json'|'plain'|'w3c'|null $OutputFormat
 */
class S3LogDestination extends Shape
{
    /**
     * @param array{
     *     BucketName?: string|null,
     *     Prefix?: string|null,
     *     BucketOwner?: string|null,
     *     OutputFormat?: 'json'|'plain'|'w3c'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
