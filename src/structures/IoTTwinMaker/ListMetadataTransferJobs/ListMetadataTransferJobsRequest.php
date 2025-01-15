<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\ListMetadataTransferJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 's3'|'iotsitewise'|'iottwinmaker' $sourceType
 * @property 's3'|'iotsitewise'|'iottwinmaker' $destinationType
 * @property list<Shapes\ListMetadataTransferJobsFilter>|null $filters
 * @property string|null $nextToken
 * @property int<0, 200>|null $maxResults
 */
class ListMetadataTransferJobsRequest extends Request
{
    /**
     * @param array{
     *     sourceType: 's3'|'iotsitewise'|'iottwinmaker',
     *     destinationType: 's3'|'iotsitewise'|'iottwinmaker',
     *     filters?: list<Shapes\ListMetadataTransferJobsFilter>|null,
     *     nextToken?: string|null,
     *     maxResults?: int<0, 200>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
