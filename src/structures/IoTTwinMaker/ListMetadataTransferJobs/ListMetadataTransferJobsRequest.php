<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\ListMetadataTransferJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 's3'|'iotsitewise'|'iottwinmaker' $sourceType
 * @property 's3'|'iotsitewise'|'iottwinmaker' $destinationType
 * @property list<Shapes\ListMetadataTransferJobsFilter> $filters
 * @property string $nextToken
 * @property int<0, 200> $maxResults
 */
class ListMetadataTransferJobsRequest extends Request
{
    /**
     * @param array{
     *     sourceType: 's3'|'iotsitewise'|'iottwinmaker',
     *     destinationType: 's3'|'iotsitewise'|'iottwinmaker',
     *     filters?: list<Shapes\ListMetadataTransferJobsFilter>,
     *     nextToken?: string,
     *     maxResults?: int<0, 200>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
