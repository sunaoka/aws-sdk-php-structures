<?php

namespace Sunaoka\Aws\Structures\SageMaker\ImportHubContent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HubContentName
 * @property string|null $HubContentVersion
 * @property 'Model'|'Notebook'|'ModelReference' $HubContentType
 * @property string $DocumentSchemaVersion
 * @property string $HubName
 * @property string|null $HubContentDisplayName
 * @property string|null $HubContentDescription
 * @property string|null $HubContentMarkdown
 * @property string $HubContentDocument
 * @property list<string>|null $HubContentSearchKeywords
 * @property list<Shapes\Tag>|null $Tags
 */
class ImportHubContentRequest extends Request
{
    /**
     * @param array{
     *     HubContentName: string,
     *     HubContentVersion?: string|null,
     *     HubContentType: 'Model'|'Notebook'|'ModelReference',
     *     DocumentSchemaVersion: string,
     *     HubName: string,
     *     HubContentDisplayName?: string|null,
     *     HubContentDescription?: string|null,
     *     HubContentMarkdown?: string|null,
     *     HubContentDocument: string,
     *     HubContentSearchKeywords?: list<string>|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
