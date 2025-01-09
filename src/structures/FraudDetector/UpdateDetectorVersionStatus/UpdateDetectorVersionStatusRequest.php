<?php

namespace Sunaoka\Aws\Structures\FraudDetector\UpdateDetectorVersionStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $detectorId
 * @property string $detectorVersionId
 * @property 'DRAFT'|'ACTIVE'|'INACTIVE' $status
 */
class UpdateDetectorVersionStatusRequest extends Request
{
    /**
     * @param array{
     *     detectorId: string,
     *     detectorVersionId: string,
     *     status: 'DRAFT'|'ACTIVE'|'INACTIVE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
