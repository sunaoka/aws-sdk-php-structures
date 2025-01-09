<?php

namespace Sunaoka\Aws\Structures\Ec2\GetManagedPrefixListEntries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $PrefixListId
 * @property int $TargetVersion
 * @property int $MaxResults
 * @property string $NextToken
 */
class GetManagedPrefixListEntriesRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     PrefixListId: string,
     *     TargetVersion?: int,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
