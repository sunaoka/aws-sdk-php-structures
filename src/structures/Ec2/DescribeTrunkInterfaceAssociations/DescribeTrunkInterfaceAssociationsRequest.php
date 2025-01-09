<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeTrunkInterfaceAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $AssociationIds
 * @property bool $DryRun
 * @property list<Shapes\Filter> $Filters
 * @property string $NextToken
 * @property int<5, 255> $MaxResults
 */
class DescribeTrunkInterfaceAssociationsRequest extends Request
{
    /**
     * @param array{
     *     AssociationIds?: list<string>,
     *     DryRun?: bool,
     *     Filters?: list<Shapes\Filter>,
     *     NextToken?: string,
     *     MaxResults?: int<5, 255>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
