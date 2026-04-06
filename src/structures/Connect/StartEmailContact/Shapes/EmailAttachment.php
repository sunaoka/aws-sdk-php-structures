<?php

namespace Sunaoka\Aws\Structures\Connect\StartEmailContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FileName
 * @property string $S3Url
 */
class EmailAttachment extends Shape
{
    /**
     * @param array{
     *     FileName: string,
     *     S3Url: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
