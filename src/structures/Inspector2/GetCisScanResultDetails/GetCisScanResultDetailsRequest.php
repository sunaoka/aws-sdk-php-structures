<?php

namespace Sunaoka\Aws\Structures\Inspector2\GetCisScanResultDetails;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $scanArn
 * @property string $targetResourceId
 * @property string $accountId
 * @property Shapes\CisScanResultDetailsFilterCriteria|null $filterCriteria
 * @property 'CHECK_ID'|'STATUS'|null $sortBy
 * @property 'ASC'|'DESC'|null $sortOrder
 * @property string|null $nextToken
 * @property int<1, 1000>|null $maxResults
 */
class GetCisScanResultDetailsRequest extends Request
{
    /**
     * @param array{
     *     scanArn: string,
     *     targetResourceId: string,
     *     accountId: string,
     *     filterCriteria?: Shapes\CisScanResultDetailsFilterCriteria|null,
     *     sortBy?: 'CHECK_ID'|'STATUS'|null,
     *     sortOrder?: 'ASC'|'DESC'|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
