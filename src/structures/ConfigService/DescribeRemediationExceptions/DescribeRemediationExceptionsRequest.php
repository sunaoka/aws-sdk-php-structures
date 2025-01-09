<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeRemediationExceptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigRuleName
 * @property list<Shapes\RemediationExceptionResourceKey> $ResourceKeys
 * @property int $Limit
 * @property string $NextToken
 */
class DescribeRemediationExceptionsRequest extends Request
{
    /**
     * @param array{
     *     ConfigRuleName: string,
     *     ResourceKeys?: list<Shapes\RemediationExceptionResourceKey>,
     *     Limit?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
