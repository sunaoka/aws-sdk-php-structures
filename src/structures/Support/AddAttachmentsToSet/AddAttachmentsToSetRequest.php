<?php

namespace Sunaoka\Aws\Structures\Support\AddAttachmentsToSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $attachmentSetId
 * @property list<Shapes\Attachment> $attachments
 */
class AddAttachmentsToSetRequest extends Request
{
    /**
     * @param array{
     *     attachmentSetId?: string|null,
     *     attachments: list<Shapes\Attachment>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
