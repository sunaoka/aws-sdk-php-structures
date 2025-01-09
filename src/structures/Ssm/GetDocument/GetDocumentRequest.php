<?php

namespace Sunaoka\Aws\Structures\Ssm\GetDocument;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $VersionName
 * @property string $DocumentVersion
 * @property 'YAML'|'JSON'|'TEXT' $DocumentFormat
 */
class GetDocumentRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     VersionName?: string,
     *     DocumentVersion?: string,
     *     DocumentFormat?: 'YAML'|'JSON'|'TEXT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
