<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\UpdateUpload;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 * @property string|null $name
 * @property string|null $contentType
 * @property bool|null $editContent
 */
class UpdateUploadRequest extends Request
{
    /**
     * @param array{
     *     arn: string,
     *     name?: string|null,
     *     contentType?: string|null,
     *     editContent?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
