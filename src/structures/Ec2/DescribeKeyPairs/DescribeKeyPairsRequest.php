<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeKeyPairs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $KeyNames
 * @property list<string> $KeyPairIds
 * @property bool $IncludePublicKey
 * @property bool $DryRun
 * @property list<Shapes\Filter> $Filters
 */
class DescribeKeyPairsRequest extends Request
{
    /**
     * @param array{
     *     KeyNames?: list<string>,
     *     KeyPairIds?: list<string>,
     *     IncludePublicKey?: bool,
     *     DryRun?: bool,
     *     Filters?: list<Shapes\Filter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
