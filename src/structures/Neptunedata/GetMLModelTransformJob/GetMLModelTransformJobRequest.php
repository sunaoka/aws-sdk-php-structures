<?php

namespace Sunaoka\Aws\Structures\Neptunedata\GetMLModelTransformJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string|null $neptuneIamRoleArn
 */
class GetMLModelTransformJobRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     neptuneIamRoleArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
