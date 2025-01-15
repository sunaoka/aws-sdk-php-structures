<?php

namespace Sunaoka\Aws\Structures\Ec2\GetManagedPrefixListAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $PrefixListId
 * @property int<5, 255>|null $MaxResults
 * @property string|null $NextToken
 */
class GetManagedPrefixListAssociationsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     PrefixListId: string,
     *     MaxResults?: int<5, 255>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
