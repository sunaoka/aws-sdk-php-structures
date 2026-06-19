<?php

namespace Sunaoka\Aws\Structures\Glue\DeleteAttachment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AssetIdentifier
 * @property string|null $IterableFormName
 * @property string|null $ItemIdentifier
 * @property string $AttachmentName
 */
class DeleteAttachmentRequest extends Request
{
    /**
     * @param array{
     *     AssetIdentifier: string,
     *     IterableFormName?: string|null,
     *     ItemIdentifier?: string|null,
     *     AttachmentName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
