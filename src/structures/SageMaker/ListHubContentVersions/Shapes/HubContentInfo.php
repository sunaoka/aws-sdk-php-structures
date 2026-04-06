<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListHubContentVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $HubContentName
 * @property string $HubContentArn
 * @property string $HubContentVersion
 * @property 'Model'|'Notebook' $HubContentType
 * @property string $DocumentSchemaVersion
 * @property string|null $HubContentDisplayName
 * @property string|null $HubContentDescription
 * @property list<string>|null $HubContentSearchKeywords
 * @property 'Available'|'Importing'|'Deleting'|'ImportFailed'|'DeleteFailed' $HubContentStatus
 * @property \Aws\Api\DateTimeResult $CreationTime
 */
class HubContentInfo extends Shape
{
    /**
     * @param array{
     *     HubContentName: string,
     *     HubContentArn: string,
     *     HubContentVersion: string,
     *     HubContentType: 'Model'|'Notebook',
     *     DocumentSchemaVersion: string,
     *     HubContentDisplayName?: string|null,
     *     HubContentDescription?: string|null,
     *     HubContentSearchKeywords?: list<string>|null,
     *     HubContentStatus: 'Available'|'Importing'|'Deleting'|'ImportFailed'|'DeleteFailed',
     *     CreationTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
