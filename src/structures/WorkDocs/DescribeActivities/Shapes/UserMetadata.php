<?php

namespace Sunaoka\Aws\Structures\WorkDocs\DescribeActivities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Username
 * @property string $GivenName
 * @property string $Surname
 * @property string $EmailAddress
 */
class UserMetadata extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Username?: string,
     *     GivenName?: string,
     *     Surname?: string,
     *     EmailAddress?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
