<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetConsolidatedReport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'PDF'|'JSON' $Format
 * @property bool|null $IncludeSharedResources
 * @property string|null $NextToken
 * @property int<1, 15>|null $MaxResults
 */
class GetConsolidatedReportRequest extends Request
{
    /**
     * @param array{
     *     Format: 'PDF'|'JSON',
     *     IncludeSharedResources?: bool|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 15>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
