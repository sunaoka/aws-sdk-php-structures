<?php

namespace Sunaoka\Aws\Structures\Sfn\TestState\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $input
 * @property string $afterArguments
 * @property string $afterInputPath
 * @property string $afterParameters
 * @property string $result
 * @property string $afterResultSelector
 * @property string $afterResultPath
 * @property InspectionDataRequest $request
 * @property InspectionDataResponse $response
 * @property string $variables
 */
class InspectionData extends Shape
{
    /**
     * @param array{
     *     input?: string,
     *     afterArguments?: string,
     *     afterInputPath?: string,
     *     afterParameters?: string,
     *     result?: string,
     *     afterResultSelector?: string,
     *     afterResultPath?: string,
     *     request?: InspectionDataRequest,
     *     response?: InspectionDataResponse,
     *     variables?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
