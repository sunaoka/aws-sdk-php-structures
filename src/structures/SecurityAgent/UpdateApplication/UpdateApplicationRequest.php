<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\UpdateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string|null $roleArn
 * @property string|null $defaultKmsKeyId
 */
class UpdateApplicationRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     roleArn?: string|null,
     *     defaultKmsKeyId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
