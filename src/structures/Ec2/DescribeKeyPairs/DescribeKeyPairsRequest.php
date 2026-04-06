<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeKeyPairs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter>|null $Filters
 * @property list<string>|null $KeyNames
 * @property list<string>|null $KeyPairIds
 * @property bool|null $DryRun
 * @property bool|null $IncludePublicKey
 */
class DescribeKeyPairsRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\Filter>|null,
     *     KeyNames?: list<string>|null,
     *     KeyPairIds?: list<string>|null,
     *     DryRun?: bool|null,
     *     IncludePublicKey?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
