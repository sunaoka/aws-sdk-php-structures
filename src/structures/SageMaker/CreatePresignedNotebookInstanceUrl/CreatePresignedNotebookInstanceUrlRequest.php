<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreatePresignedNotebookInstanceUrl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NotebookInstanceName
 * @property int $SessionExpirationDurationInSeconds
 */
class CreatePresignedNotebookInstanceUrlRequest extends Request
{
    /**
     * @param array{
     *     NotebookInstanceName: string,
     *     SessionExpirationDurationInSeconds?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
