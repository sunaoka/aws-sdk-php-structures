<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeDocument;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $DocumentVersion
 * @property string|null $VersionName
 */
class DescribeDocumentRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     DocumentVersion?: string|null,
     *     VersionName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
