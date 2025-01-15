<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeRemediationExecutionStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigRuleName
 * @property list<Shapes\ResourceKey>|null $ResourceKeys
 * @property int<0, 100>|null $Limit
 * @property string|null $NextToken
 */
class DescribeRemediationExecutionStatusRequest extends Request
{
    /**
     * @param array{
     *     ConfigRuleName: string,
     *     ResourceKeys?: list<Shapes\ResourceKey>|null,
     *     Limit?: int<0, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
