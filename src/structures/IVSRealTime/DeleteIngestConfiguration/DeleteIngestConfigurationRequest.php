<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\DeleteIngestConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 * @property bool $force
 */
class DeleteIngestConfigurationRequest extends Request
{
    /**
     * @param array{
     *     arn: string,
     *     force?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
