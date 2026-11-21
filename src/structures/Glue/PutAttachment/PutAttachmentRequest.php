<?php

namespace Sunaoka\Aws\Structures\Glue\PutAttachment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AssetIdentifier
 * @property string|null $IterableFormName
 * @property string|null $ItemIdentifier
 * @property string $AttachmentName
 * @property string $Content
 * @property string|null $FormTypeIdentifier
 * @property string|null $ClientToken
 */
class PutAttachmentRequest extends Request
{
    /**
     * @param array{
     *     AssetIdentifier: string,
     *     IterableFormName?: string|null,
     *     ItemIdentifier?: string|null,
     *     AttachmentName: string,
     *     Content: string,
     *     FormTypeIdentifier?: string|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
