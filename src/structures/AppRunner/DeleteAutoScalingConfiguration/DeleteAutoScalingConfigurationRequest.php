<?php

namespace Sunaoka\Aws\Structures\AppRunner\DeleteAutoScalingConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AutoScalingConfigurationArn
 * @property bool $DeleteAllRevisions
 */
class DeleteAutoScalingConfigurationRequest extends Request
{
    /**
     * @param array{
     *     AutoScalingConfigurationArn: string,
     *     DeleteAllRevisions?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
