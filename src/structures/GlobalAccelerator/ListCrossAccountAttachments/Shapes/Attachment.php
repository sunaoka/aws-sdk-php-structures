<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\ListCrossAccountAttachments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AttachmentArn
 * @property string|null $Name
 * @property list<string>|null $Principals
 * @property list<ResourceShape>|null $Resources
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 */
class Attachment extends Shape
{
    /**
     * @param array{
     *     AttachmentArn?: string|null,
     *     Name?: string|null,
     *     Principals?: list<string>|null,
     *     Resources?: list<ResourceShape>|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     CreatedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
