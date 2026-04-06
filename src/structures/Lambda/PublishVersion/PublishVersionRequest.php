<?php

namespace Sunaoka\Aws\Structures\Lambda\PublishVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FunctionName
 * @property string|null $CodeSha256
 * @property string|null $Description
 * @property string|null $RevisionId
 */
class PublishVersionRequest extends Request
{
    /**
     * @param array{
     *     FunctionName: string,
     *     CodeSha256?: string|null,
     *     Description?: string|null,
     *     RevisionId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
