<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListApplications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationUrl
 * @property 'IDENTITY_CENTER'|'APPLICATION' $Origin
 */
class SignInOptions extends Shape
{
    /**
     * @param array{
     *     ApplicationUrl?: string,
     *     Origin: 'IDENTITY_CENTER'|'APPLICATION'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
