<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeAuthenticationProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AuthenticationProfileName
 * @property string $AuthenticationProfileContent
 */
class AuthenticationProfile extends Shape
{
    /**
     * @param array{
     *     AuthenticationProfileName?: string,
     *     AuthenticationProfileContent?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
