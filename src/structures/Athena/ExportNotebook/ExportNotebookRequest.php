<?php

namespace Sunaoka\Aws\Structures\Athena\ExportNotebook;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NotebookId
 */
class ExportNotebookRequest extends Request
{
    /**
     * @param array{NotebookId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
