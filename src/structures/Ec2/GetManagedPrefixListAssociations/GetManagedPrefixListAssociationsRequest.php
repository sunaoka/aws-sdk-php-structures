<?php

namespace Sunaoka\Aws\Structures\Ec2\GetManagedPrefixListAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $PrefixListId
 * @property int<5, 255> $MaxResults
 * @property string $NextToken
 */
class GetManagedPrefixListAssociationsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     PrefixListId: string,
     *     MaxResults?: int<5, 255>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
