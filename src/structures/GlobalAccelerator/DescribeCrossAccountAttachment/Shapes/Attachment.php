<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\DescribeCrossAccountAttachment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AttachmentArn
 * @property string $Name
 * @property list<string> $Principals
 * @property list<Resource> $Resources
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property \Aws\Api\DateTimeResult $CreatedTime
 */
class Attachment extends Shape
{
    /**
     * @param array{
     *     AttachmentArn?: string,
     *     Name?: string,
     *     Principals?: list<string>,
     *     Resources?: list<Resource>,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult,
     *     CreatedTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
