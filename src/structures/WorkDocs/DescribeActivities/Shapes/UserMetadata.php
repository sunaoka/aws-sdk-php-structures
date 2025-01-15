<?php

namespace Sunaoka\Aws\Structures\WorkDocs\DescribeActivities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Username
 * @property string|null $GivenName
 * @property string|null $Surname
 * @property string|null $EmailAddress
 */
class UserMetadata extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Username?: string|null,
     *     GivenName?: string|null,
     *     Surname?: string|null,
     *     EmailAddress?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
