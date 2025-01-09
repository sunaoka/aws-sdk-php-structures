<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeConfigurationRecorders;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $ConfigurationRecorderNames
 * @property string $ServicePrincipal
 * @property string $Arn
 */
class DescribeConfigurationRecordersRequest extends Request
{
    /**
     * @param array{
     *     ConfigurationRecorderNames?: list<string>,
     *     ServicePrincipal?: string,
     *     Arn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
