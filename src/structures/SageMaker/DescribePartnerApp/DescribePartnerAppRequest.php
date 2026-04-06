<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribePartnerApp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 * @property bool|null $IncludeAvailableUpgrade
 */
class DescribePartnerAppRequest extends Request
{
    /**
     * @param array{
     *     Arn: string,
     *     IncludeAvailableUpgrade?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
