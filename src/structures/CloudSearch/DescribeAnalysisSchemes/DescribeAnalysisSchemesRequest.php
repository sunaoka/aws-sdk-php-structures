<?php

namespace Sunaoka\Aws\Structures\CloudSearch\DescribeAnalysisSchemes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property list<string>|null $AnalysisSchemeNames
 * @property bool|null $Deployed
 */
class DescribeAnalysisSchemesRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     AnalysisSchemeNames?: list<string>|null,
     *     Deployed?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
