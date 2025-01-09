<?php

namespace Sunaoka\Aws\Structures\PI\ListPerformanceAnalysisReports;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'RDS'|'DOCDB' $ServiceType
 * @property string $Identifier
 * @property string $NextToken
 * @property int<0, 25> $MaxResults
 * @property bool $ListTags
 */
class ListPerformanceAnalysisReportsRequest extends Request
{
    /**
     * @param array{
     *     ServiceType: 'RDS'|'DOCDB',
     *     Identifier: string,
     *     NextToken?: string,
     *     MaxResults?: int<0, 25>,
     *     ListTags?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
