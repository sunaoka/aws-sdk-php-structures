<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeDocument;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $DocumentVersion
 * @property string $VersionName
 */
class DescribeDocumentRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     DocumentVersion?: string,
     *     VersionName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
