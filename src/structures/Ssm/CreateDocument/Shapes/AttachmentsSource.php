<?php

namespace Sunaoka\Aws\Structures\Ssm\CreateDocument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SourceUrl'|'S3FileUrl'|'AttachmentReference'|null $Key
 * @property list<string>|null $Values
 * @property string|null $Name
 */
class AttachmentsSource extends Shape
{
    /**
     * @param array{
     *     Key?: 'SourceUrl'|'S3FileUrl'|'AttachmentReference'|null,
     *     Values?: list<string>|null,
     *     Name?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
