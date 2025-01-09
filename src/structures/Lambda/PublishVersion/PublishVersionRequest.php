<?php

namespace Sunaoka\Aws\Structures\Lambda\PublishVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FunctionName
 * @property string $CodeSha256
 * @property string $Description
 * @property string $RevisionId
 */
class PublishVersionRequest extends Request
{
    /**
     * @param array{
     *     FunctionName: string,
     *     CodeSha256?: string,
     *     Description?: string,
     *     RevisionId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
