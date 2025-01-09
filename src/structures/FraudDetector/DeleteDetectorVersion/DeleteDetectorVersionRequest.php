<?php

namespace Sunaoka\Aws\Structures\FraudDetector\DeleteDetectorVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $detectorId
 * @property string $detectorVersionId
 */
class DeleteDetectorVersionRequest extends Request
{
    /**
     * @param array{
     *     detectorId: string,
     *     detectorVersionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
