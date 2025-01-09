<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeImageAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ImageId
 * @property list<'APPLICATION'> $AssociatedResourceTypes
 */
class DescribeImageAssociationsRequest extends Request
{
    /**
     * @param array{
     *     ImageId: string,
     *     AssociatedResourceTypes: list<'APPLICATION'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
