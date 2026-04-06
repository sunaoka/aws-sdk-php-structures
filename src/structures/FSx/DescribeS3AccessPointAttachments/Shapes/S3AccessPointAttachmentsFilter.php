<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeS3AccessPointAttachments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'file-system-id'|'volume-id'|'type'|null $Name
 * @property list<string>|null $Values
 */
class S3AccessPointAttachmentsFilter extends Shape
{
    /**
     * @param array{
     *     Name?: 'file-system-id'|'volume-id'|'type'|null,
     *     Values?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
