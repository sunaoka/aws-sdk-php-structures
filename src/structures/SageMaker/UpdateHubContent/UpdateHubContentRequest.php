<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateHubContent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HubName
 * @property string $HubContentName
 * @property 'Model'|'Notebook'|'ModelReference'|'DataSet'|'JsonDoc' $HubContentType
 * @property string $HubContentVersion
 * @property string|null $HubContentDisplayName
 * @property string|null $HubContentDescription
 * @property string|null $HubContentMarkdown
 * @property list<string>|null $HubContentSearchKeywords
 * @property 'Supported'|'Deprecated'|'Restricted'|null $SupportStatus
 */
class UpdateHubContentRequest extends Request
{
    /**
     * @param array{
     *     HubName: string,
     *     HubContentName: string,
     *     HubContentType: 'Model'|'Notebook'|'ModelReference'|'DataSet'|'JsonDoc',
     *     HubContentVersion: string,
     *     HubContentDisplayName?: string|null,
     *     HubContentDescription?: string|null,
     *     HubContentMarkdown?: string|null,
     *     HubContentSearchKeywords?: list<string>|null,
     *     SupportStatus?: 'Supported'|'Deprecated'|'Restricted'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
