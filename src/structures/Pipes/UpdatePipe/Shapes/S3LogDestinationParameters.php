<?php

namespace Sunaoka\Aws\Structures\Pipes\UpdatePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BucketName
 * @property string $BucketOwner
 * @property 'json'|'plain'|'w3c'|null $OutputFormat
 * @property string|null $Prefix
 */
class S3LogDestinationParameters extends Shape
{
    /**
     * @param array{
     *     BucketName: string,
     *     BucketOwner: string,
     *     OutputFormat?: 'json'|'plain'|'w3c'|null,
     *     Prefix?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
