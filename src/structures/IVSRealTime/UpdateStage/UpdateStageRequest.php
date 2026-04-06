<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\UpdateStage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 * @property string|null $name
 */
class UpdateStageRequest extends Request
{
    /**
     * @param array{
     *     arn: string,
     *     name?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
