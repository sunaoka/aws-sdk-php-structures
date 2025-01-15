<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeAuthenticationProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AuthenticationProfileName
 * @property string|null $AuthenticationProfileContent
 */
class AuthenticationProfile extends Shape
{
    /**
     * @param array{
     *     AuthenticationProfileName?: string|null,
     *     AuthenticationProfileContent?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
