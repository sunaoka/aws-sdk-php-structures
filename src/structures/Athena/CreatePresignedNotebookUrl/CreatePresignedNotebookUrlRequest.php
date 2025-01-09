<?php

namespace Sunaoka\Aws\Structures\Athena\CreatePresignedNotebookUrl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SessionId
 */
class CreatePresignedNotebookUrlRequest extends Request
{
    /**
     * @param array{SessionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
