<?php

namespace Sunaoka\Aws\Structures\Iot\DeleteOTAUpdate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $otaUpdateId
 * @property bool $deleteStream
 * @property bool $forceDeleteAWSJob
 */
class DeleteOTAUpdateRequest extends Request
{
    /**
     * @param array{
     *     otaUpdateId: string,
     *     deleteStream?: bool,
     *     forceDeleteAWSJob?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
