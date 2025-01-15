<?php

namespace Sunaoka\Aws\Structures\Ssm\DeleteDocument;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $DocumentVersion
 * @property string|null $VersionName
 * @property bool|null $Force
 */
class DeleteDocumentRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     DocumentVersion?: string|null,
     *     VersionName?: string|null,
     *     Force?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
