<?php

namespace Sunaoka\Aws\Structures\Ec2\RestoreManagedPrefixListVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $PrefixListId
 * @property int $PreviousVersion
 * @property int $CurrentVersion
 */
class RestoreManagedPrefixListVersionRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     PrefixListId: string,
     *     PreviousVersion: int,
     *     CurrentVersion: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
