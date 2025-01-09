<?php

namespace Sunaoka\Aws\Structures\SecurityIR\GetCase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $attachmentId
 * @property string $fileName
 * @property 'Verified'|'Failed'|'Pending' $attachmentStatus
 * @property string $creator
 * @property \Aws\Api\DateTimeResult $createdDate
 */
class CaseAttachmentAttributes extends Shape
{
    /**
     * @param array{
     *     attachmentId: string,
     *     fileName: string,
     *     attachmentStatus: 'Verified'|'Failed'|'Pending',
     *     creator: string,
     *     createdDate: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
