<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeRemediationExecutionStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigRuleName
 * @property list<Shapes\ResourceKey> $ResourceKeys
 * @property int<0, 100> $Limit
 * @property string $NextToken
 */
class DescribeRemediationExecutionStatusRequest extends Request
{
    /**
     * @param array{
     *     ConfigRuleName: string,
     *     ResourceKeys?: list<Shapes\ResourceKey>,
     *     Limit?: int<0, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
