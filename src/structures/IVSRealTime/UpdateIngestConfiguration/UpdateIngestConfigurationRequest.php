<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\UpdateIngestConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 * @property string|null $stageArn
 * @property bool|null $redundantIngest
 */
class UpdateIngestConfigurationRequest extends Request
{
    /**
     * @param array{
     *     arn: string,
     *     stageArn?: string|null,
     *     redundantIngest?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
