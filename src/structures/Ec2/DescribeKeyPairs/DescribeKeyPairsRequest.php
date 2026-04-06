<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeKeyPairs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $KeyNames
 * @property list<string>|null $KeyPairIds
 * @property bool|null $IncludePublicKey
 * @property bool|null $DryRun
 * @property list<Shapes\Filter>|null $Filters
 */
class DescribeKeyPairsRequest extends Request
{
    /**
     * @param array{
     *     KeyNames?: list<string>|null,
     *     KeyPairIds?: list<string>|null,
     *     IncludePublicKey?: bool|null,
     *     DryRun?: bool|null,
     *     Filters?: list<Shapes\Filter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
