<?php

namespace Sunaoka\Aws\Structures\Ssm\UpdateDocument;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Content
 * @property list<Shapes\AttachmentsSource>|null $Attachments
 * @property string $Name
 * @property string|null $DisplayName
 * @property string|null $VersionName
 * @property string|null $DocumentVersion
 * @property 'YAML'|'JSON'|'TEXT'|null $DocumentFormat
 * @property string|null $TargetType
 */
class UpdateDocumentRequest extends Request
{
    /**
     * @param array{
     *     Content: string,
     *     Attachments?: list<Shapes\AttachmentsSource>|null,
     *     Name: string,
     *     DisplayName?: string|null,
     *     VersionName?: string|null,
     *     DocumentVersion?: string|null,
     *     DocumentFormat?: 'YAML'|'JSON'|'TEXT'|null,
     *     TargetType?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
