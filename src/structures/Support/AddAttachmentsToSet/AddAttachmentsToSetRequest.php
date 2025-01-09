<?php

namespace Sunaoka\Aws\Structures\Support\AddAttachmentsToSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $attachmentSetId
 * @property list<Shapes\Attachment> $attachments
 */
class AddAttachmentsToSetRequest extends Request
{
    /**
     * @param array{
     *     attachmentSetId?: string,
     *     attachments: list<Shapes\Attachment>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
