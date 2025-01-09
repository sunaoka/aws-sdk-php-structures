<?php

namespace Sunaoka\Aws\Structures\CloudSearch\DescribeAnalysisSchemes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property list<string> $AnalysisSchemeNames
 * @property bool $Deployed
 */
class DescribeAnalysisSchemesRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     AnalysisSchemeNames?: list<string>,
     *     Deployed?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
