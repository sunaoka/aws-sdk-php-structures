<?php

namespace Sunaoka\Aws\Structures\Athena\DeleteNotebook;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NotebookId
 */
class DeleteNotebookRequest extends Request
{
    /**
     * @param array{NotebookId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
