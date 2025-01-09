<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListHubs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $HubName
 * @property string $HubArn
 * @property string $HubDisplayName
 * @property string $HubDescription
 * @property list<string> $HubSearchKeywords
 * @property 'InService'|'Creating'|'Updating'|'Deleting'|'CreateFailed'|'UpdateFailed'|'DeleteFailed' $HubStatus
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 */
class HubInfo extends Shape
{
    /**
     * @param array{
     *     HubName: string,
     *     HubArn: string,
     *     HubDisplayName?: string,
     *     HubDescription?: string,
     *     HubSearchKeywords?: list<string>,
     *     HubStatus: 'InService'|'Creating'|'Updating'|'Deleting'|'CreateFailed'|'UpdateFailed'|'DeleteFailed',
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     LastModifiedTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
