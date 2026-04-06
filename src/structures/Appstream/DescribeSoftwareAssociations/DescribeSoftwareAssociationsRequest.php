<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeSoftwareAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AssociatedResource
 * @property int|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeSoftwareAssociationsRequest extends Request
{
    /**
     * @param array{
     *     AssociatedResource: string,
     *     MaxResults?: int|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
