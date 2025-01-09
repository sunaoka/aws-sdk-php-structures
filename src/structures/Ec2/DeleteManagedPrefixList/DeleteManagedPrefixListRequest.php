<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteManagedPrefixList;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $PrefixListId
 */
class DeleteManagedPrefixListRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     PrefixListId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
