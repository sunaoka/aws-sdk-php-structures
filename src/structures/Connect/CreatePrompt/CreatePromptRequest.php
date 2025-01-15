<?php

namespace Sunaoka\Aws\Structures\Connect\CreatePrompt;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $Name
 * @property string|null $Description
 * @property string $S3Uri
 * @property array<string, string>|null $Tags
 */
class CreatePromptRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     Name: string,
     *     Description?: string|null,
     *     S3Uri: string,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
