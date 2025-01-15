<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribePrincipalIdFormat;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property list<string>|null $Resources
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 */
class DescribePrincipalIdFormatRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     Resources?: list<string>|null,
     *     MaxResults?: int<1, 1000>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
