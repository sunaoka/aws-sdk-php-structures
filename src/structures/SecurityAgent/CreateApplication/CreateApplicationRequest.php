<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\CreateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $idcInstanceArn
 * @property string|null $roleArn
 * @property string|null $defaultKmsKeyId
 * @property array<string, string>|null $tags
 */
class CreateApplicationRequest extends Request
{
    /**
     * @param array{
     *     idcInstanceArn?: string|null,
     *     roleArn?: string|null,
     *     defaultKmsKeyId?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
