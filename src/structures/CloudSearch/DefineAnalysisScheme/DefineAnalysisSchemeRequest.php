<?php

namespace Sunaoka\Aws\Structures\CloudSearch\DefineAnalysisScheme;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property Shapes\AnalysisScheme $AnalysisScheme
 */
class DefineAnalysisSchemeRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     AnalysisScheme: Shapes\AnalysisScheme
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
