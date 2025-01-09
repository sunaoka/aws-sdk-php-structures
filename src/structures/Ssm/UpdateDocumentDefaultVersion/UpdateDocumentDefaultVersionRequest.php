<?php

namespace Sunaoka\Aws\Structures\Ssm\UpdateDocumentDefaultVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $DocumentVersion
 */
class UpdateDocumentDefaultVersionRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     DocumentVersion: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
