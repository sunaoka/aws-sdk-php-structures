<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\GetTest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $testId
 * @property string $serviceArn
 */
class GetTestRequest extends Request
{
    /**
     * @param array{
     *     testId: string,
     *     serviceArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
