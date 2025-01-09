<?php

namespace Sunaoka\Aws\Structures\Ssm\DeleteDocument;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $DocumentVersion
 * @property string $VersionName
 * @property bool $Force
 */
class DeleteDocumentRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     DocumentVersion?: string,
     *     VersionName?: string,
     *     Force?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
