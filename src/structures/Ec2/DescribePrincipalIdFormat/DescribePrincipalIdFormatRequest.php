<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribePrincipalIdFormat;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property list<string> $Resources
 * @property int<1, 1000> $MaxResults
 * @property string $NextToken
 */
class DescribePrincipalIdFormatRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     Resources?: list<string>,
     *     MaxResults?: int<1, 1000>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
