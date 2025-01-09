<?php

namespace Sunaoka\Aws\Structures\CloudFront\TestFunction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $IfMatch
 * @property 'DEVELOPMENT'|'LIVE' $Stage
 * @property string $EventObject
 */
class TestFunctionRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     IfMatch: string,
     *     Stage?: 'DEVELOPMENT'|'LIVE',
     *     EventObject: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
