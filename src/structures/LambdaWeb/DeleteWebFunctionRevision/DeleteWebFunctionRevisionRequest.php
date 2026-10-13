<?php

namespace Sunaoka\Aws\Structures\LambdaWeb\DeleteWebFunctionRevision;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $functionName
 * @property string $revisionId
 */
class DeleteWebFunctionRevisionRequest extends Request
{
    /**
     * @param array{
     *     functionName: string,
     *     revisionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
