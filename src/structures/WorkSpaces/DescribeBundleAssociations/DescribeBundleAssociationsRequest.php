<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeBundleAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BundleId
 * @property list<'APPLICATION'> $AssociatedResourceTypes
 */
class DescribeBundleAssociationsRequest extends Request
{
    /**
     * @param array{
     *     BundleId: string,
     *     AssociatedResourceTypes: list<'APPLICATION'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
