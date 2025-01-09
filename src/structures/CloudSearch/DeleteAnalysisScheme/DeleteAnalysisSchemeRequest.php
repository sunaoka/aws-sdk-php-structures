<?php

namespace Sunaoka\Aws\Structures\CloudSearch\DeleteAnalysisScheme;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $AnalysisSchemeName
 */
class DeleteAnalysisSchemeRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     AnalysisSchemeName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
