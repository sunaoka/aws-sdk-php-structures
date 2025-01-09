<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\GetSuite;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 */
class GetSuiteRequest extends Request
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
