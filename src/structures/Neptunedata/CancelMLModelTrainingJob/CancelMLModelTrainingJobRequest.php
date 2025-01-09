<?php

namespace Sunaoka\Aws\Structures\Neptunedata\CancelMLModelTrainingJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string $neptuneIamRoleArn
 * @property bool $clean
 */
class CancelMLModelTrainingJobRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     neptuneIamRoleArn?: string,
     *     clean?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
