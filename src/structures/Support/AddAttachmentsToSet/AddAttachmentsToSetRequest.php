<?php

namespace Sunaoka\Aws\Structures\Support\AddAttachmentsToSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $attachmentSetId
 * @property list<Shapes\Attachment> $attachments
 * @property bool|null $dryRun
 */
class AddAttachmentsToSetRequest extends Request
{
    /**
     * @param array{
     *     attachmentSetId?: string|null,
     *     attachments: list<Shapes\Attachment>,
     *     dryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
