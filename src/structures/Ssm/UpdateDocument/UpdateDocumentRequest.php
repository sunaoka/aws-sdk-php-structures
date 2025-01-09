<?php

namespace Sunaoka\Aws\Structures\Ssm\UpdateDocument;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Content
 * @property list<Shapes\AttachmentsSource> $Attachments
 * @property string $Name
 * @property string $DisplayName
 * @property string $VersionName
 * @property string $DocumentVersion
 * @property 'YAML'|'JSON'|'TEXT' $DocumentFormat
 * @property string $TargetType
 */
class UpdateDocumentRequest extends Request
{
    /**
     * @param array{
     *     Content: string,
     *     Attachments?: list<Shapes\AttachmentsSource>,
     *     Name: string,
     *     DisplayName?: string,
     *     VersionName?: string,
     *     DocumentVersion?: string,
     *     DocumentFormat?: 'YAML'|'JSON'|'TEXT',
     *     TargetType?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
