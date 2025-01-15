<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeFastSnapshotRestores;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter>|null $Filters
 * @property int<0, 200>|null $MaxResults
 * @property string|null $NextToken
 * @property bool|null $DryRun
 */
class DescribeFastSnapshotRestoresRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\Filter>|null,
     *     MaxResults?: int<0, 200>|null,
     *     NextToken?: string|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
