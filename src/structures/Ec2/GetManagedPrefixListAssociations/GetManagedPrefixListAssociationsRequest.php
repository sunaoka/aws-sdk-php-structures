<?php

namespace Sunaoka\Aws\Structures\Ec2\GetManagedPrefixListAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $PrefixListId
 * @property int $MaxResults
 * @property string $NextToken
 */
class GetManagedPrefixListAssociationsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     PrefixListId: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
