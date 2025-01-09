<?php

namespace Sunaoka\Aws\Structures\Translate\GetTerminology;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property 'CSV'|'TMX'|'TSV' $TerminologyDataFormat
 */
class GetTerminologyRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     TerminologyDataFormat?: 'CSV'|'TMX'|'TSV'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
