<?php

namespace Sunaoka\Aws\Structures\PI\ListPerformanceAnalysisReports;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'RDS'|'DOCDB' $ServiceType
 * @property string $Identifier
 * @property string|null $NextToken
 * @property int<0, 25>|null $MaxResults
 * @property bool|null $ListTags
 */
class ListPerformanceAnalysisReportsRequest extends Request
{
    /**
     * @param array{
     *     ServiceType: 'RDS'|'DOCDB',
     *     Identifier: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<0, 25>|null,
     *     ListTags?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
