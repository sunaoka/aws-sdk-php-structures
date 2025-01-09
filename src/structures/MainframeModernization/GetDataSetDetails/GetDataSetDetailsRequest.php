<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\GetDataSetDetails;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $dataSetName
 */
class GetDataSetDetailsRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     dataSetName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
