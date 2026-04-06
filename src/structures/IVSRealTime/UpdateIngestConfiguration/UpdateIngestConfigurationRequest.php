<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\UpdateIngestConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 * @property string|null $stageArn
 */
class UpdateIngestConfigurationRequest extends Request
{
    /**
     * @param array{
     *     arn: string,
     *     stageArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
