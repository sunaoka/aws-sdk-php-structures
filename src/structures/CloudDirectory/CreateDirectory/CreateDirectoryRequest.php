<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\CreateDirectory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $SchemaArn
 */
class CreateDirectoryRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     SchemaArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
