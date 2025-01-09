<?php

namespace Sunaoka\Aws\Structures\KinesisAnalytics\AddApplicationInput;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationName
 * @property int<1, 999999999> $CurrentApplicationVersionId
 * @property Shapes\Input $Input
 */
class AddApplicationInputRequest extends Request
{
    /**
     * @param array{
     *     ApplicationName: string,
     *     CurrentApplicationVersionId: int<1, 999999999>,
     *     Input: Shapes\Input
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
