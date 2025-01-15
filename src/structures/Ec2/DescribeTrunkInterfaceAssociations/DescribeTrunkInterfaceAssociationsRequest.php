<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeTrunkInterfaceAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $AssociationIds
 * @property bool|null $DryRun
 * @property list<Shapes\Filter>|null $Filters
 * @property string|null $NextToken
 * @property int<5, 255>|null $MaxResults
 */
class DescribeTrunkInterfaceAssociationsRequest extends Request
{
    /**
     * @param array{
     *     AssociationIds?: list<string>|null,
     *     DryRun?: bool|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<5, 255>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
