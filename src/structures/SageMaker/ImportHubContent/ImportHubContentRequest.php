<?php

namespace Sunaoka\Aws\Structures\SageMaker\ImportHubContent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HubContentName
 * @property string $HubContentVersion
 * @property 'Model'|'Notebook'|'ModelReference' $HubContentType
 * @property string $DocumentSchemaVersion
 * @property string $HubName
 * @property string $HubContentDisplayName
 * @property string $HubContentDescription
 * @property string $HubContentMarkdown
 * @property string $HubContentDocument
 * @property list<string> $HubContentSearchKeywords
 * @property list<Shapes\Tag> $Tags
 */
class ImportHubContentRequest extends Request
{
    /**
     * @param array{
     *     HubContentName: string,
     *     HubContentVersion?: string,
     *     HubContentType: 'Model'|'Notebook'|'ModelReference',
     *     DocumentSchemaVersion: string,
     *     HubName: string,
     *     HubContentDisplayName?: string,
     *     HubContentDescription?: string,
     *     HubContentMarkdown?: string,
     *     HubContentDocument: string,
     *     HubContentSearchKeywords?: list<string>,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
