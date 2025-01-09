<?php

namespace Sunaoka\Aws\Structures\Inspector2\GetCisScanResultDetails;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accountId
 * @property Shapes\CisScanResultDetailsFilterCriteria $filterCriteria
 * @property int $maxResults
 * @property string $nextToken
 * @property string $scanArn
 * @property 'CHECK_ID'|'STATUS' $sortBy
 * @property 'ASC'|'DESC' $sortOrder
 * @property string $targetResourceId
 */
class GetCisScanResultDetailsRequest extends Request
{
    /**
     * @param array{
     *     accountId: string,
     *     filterCriteria?: Shapes\CisScanResultDetailsFilterCriteria,
     *     maxResults?: int,
     *     nextToken?: string,
     *     scanArn: string,
     *     sortBy?: 'CHECK_ID'|'STATUS',
     *     sortOrder?: 'ASC'|'DESC',
     *     targetResourceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
