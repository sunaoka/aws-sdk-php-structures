<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetConsolidatedReport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'PDF'|'JSON' $Format
 * @property bool $IncludeSharedResources
 * @property string $NextToken
 * @property int<1, 15> $MaxResults
 */
class GetConsolidatedReportRequest extends Request
{
    /**
     * @param array{
     *     Format: 'PDF'|'JSON',
     *     IncludeSharedResources?: bool,
     *     NextToken?: string,
     *     MaxResults?: int<1, 15>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
