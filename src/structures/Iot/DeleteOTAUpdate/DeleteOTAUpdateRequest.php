<?php

namespace Sunaoka\Aws\Structures\Iot\DeleteOTAUpdate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $otaUpdateId
 * @property bool|null $deleteStream
 * @property bool|null $forceDeleteAWSJob
 */
class DeleteOTAUpdateRequest extends Request
{
    /**
     * @param array{
     *     otaUpdateId: string,
     *     deleteStream?: bool|null,
     *     forceDeleteAWSJob?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
