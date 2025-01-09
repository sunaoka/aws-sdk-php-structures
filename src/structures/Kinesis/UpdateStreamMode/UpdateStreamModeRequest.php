<?php

namespace Sunaoka\Aws\Structures\Kinesis\UpdateStreamMode;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StreamARN
 * @property Shapes\StreamModeDetails $StreamModeDetails
 */
class UpdateStreamModeRequest extends Request
{
    /**
     * @param array{
     *     StreamARN: string,
     *     StreamModeDetails: Shapes\StreamModeDetails
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
