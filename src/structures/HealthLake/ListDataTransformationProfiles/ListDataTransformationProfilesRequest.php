<?php

namespace Sunaoka\Aws\Structures\HealthLake\ListDataTransformationProfiles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'CCDA'|'CSV' $SourceFormat
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListDataTransformationProfilesRequest extends Request
{
    /**
     * @param array{
     *     SourceFormat: 'CCDA'|'CSV',
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
