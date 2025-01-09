<?php

namespace Sunaoka\Aws\Structures\Pipes\CreatePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BucketName
 * @property string $BucketOwner
 * @property 'json'|'plain'|'w3c' $OutputFormat
 * @property string $Prefix
 */
class S3LogDestinationParameters extends Shape
{
    /**
     * @param array{
     *     BucketName: string,
     *     BucketOwner: string,
     *     OutputFormat?: 'json'|'plain'|'w3c',
     *     Prefix?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
