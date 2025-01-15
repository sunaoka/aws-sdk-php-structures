<?php

namespace Sunaoka\Aws\Structures\Ec2\EnableImageDeprecation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ImageId
 * @property \Aws\Api\DateTimeResult $DeprecateAt
 * @property bool|null $DryRun
 */
class EnableImageDeprecationRequest extends Request
{
    /**
     * @param array{
     *     ImageId: string,
     *     DeprecateAt: \Aws\Api\DateTimeResult,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
