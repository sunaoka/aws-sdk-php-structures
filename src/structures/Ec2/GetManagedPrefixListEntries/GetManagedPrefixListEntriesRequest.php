<?php

namespace Sunaoka\Aws\Structures\Ec2\GetManagedPrefixListEntries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $PrefixListId
 * @property int|null $TargetVersion
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class GetManagedPrefixListEntriesRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     PrefixListId: string,
     *     TargetVersion?: int|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
