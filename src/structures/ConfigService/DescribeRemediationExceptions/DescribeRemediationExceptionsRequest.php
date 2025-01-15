<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeRemediationExceptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigRuleName
 * @property list<Shapes\RemediationExceptionResourceKey>|null $ResourceKeys
 * @property int<0, 100>|null $Limit
 * @property string|null $NextToken
 */
class DescribeRemediationExceptionsRequest extends Request
{
    /**
     * @param array{
     *     ConfigRuleName: string,
     *     ResourceKeys?: list<Shapes\RemediationExceptionResourceKey>|null,
     *     Limit?: int<0, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
