<?php

namespace Sunaoka\Aws\Structures\Inspector2\GetCisScanResultDetails;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accountId
 * @property Shapes\CisScanResultDetailsFilterCriteria|null $filterCriteria
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 * @property string $scanArn
 * @property 'CHECK_ID'|'STATUS'|null $sortBy
 * @property 'ASC'|'DESC'|null $sortOrder
 * @property string $targetResourceId
 */
class GetCisScanResultDetailsRequest extends Request
{
    /**
     * @param array{
     *     accountId: string,
     *     filterCriteria?: Shapes\CisScanResultDetailsFilterCriteria|null,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null,
     *     scanArn: string,
     *     sortBy?: 'CHECK_ID'|'STATUS'|null,
     *     sortOrder?: 'ASC'|'DESC'|null,
     *     targetResourceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
