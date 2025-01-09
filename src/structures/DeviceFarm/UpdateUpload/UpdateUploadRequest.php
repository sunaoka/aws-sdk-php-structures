<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\UpdateUpload;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 * @property string $name
 * @property string $contentType
 * @property bool $editContent
 */
class UpdateUploadRequest extends Request
{
    /**
     * @param array{
     *     arn: string,
     *     name?: string,
     *     contentType?: string,
     *     editContent?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
