<?php

namespace Sunaoka\Aws\Structures\Ssm\UpdateDocument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SourceUrl'|'S3FileUrl'|'AttachmentReference' $Key
 * @property list<string> $Values
 * @property string $Name
 */
class AttachmentsSource extends Shape
{
    /**
     * @param array{
     *     Key?: 'SourceUrl'|'S3FileUrl'|'AttachmentReference',
     *     Values?: list<string>,
     *     Name?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
