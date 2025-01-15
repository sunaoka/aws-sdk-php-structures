<?php

namespace Sunaoka\Aws\Structures\Ssm\GetDocument;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $VersionName
 * @property string|null $DocumentVersion
 * @property 'YAML'|'JSON'|'TEXT'|null $DocumentFormat
 */
class GetDocumentRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     VersionName?: string|null,
     *     DocumentVersion?: string|null,
     *     DocumentFormat?: 'YAML'|'JSON'|'TEXT'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
