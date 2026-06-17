<?php

namespace Sunaoka\Aws\Structures\Glue\PutAttachment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AssetIdentifier
 * @property string|null $IterableFormName
 * @property string|null $ItemIdentifier
 * @property string $AttachmentName
 * @property string $Content
 * @property string $FormTypeId
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
     *     FormTypeId: string,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
