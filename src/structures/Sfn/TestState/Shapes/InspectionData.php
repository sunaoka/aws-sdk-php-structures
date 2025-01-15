<?php

namespace Sunaoka\Aws\Structures\Sfn\TestState\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $input
 * @property string|null $afterArguments
 * @property string|null $afterInputPath
 * @property string|null $afterParameters
 * @property string|null $result
 * @property string|null $afterResultSelector
 * @property string|null $afterResultPath
 * @property InspectionDataRequest|null $request
 * @property InspectionDataResponse|null $response
 * @property string|null $variables
 */
class InspectionData extends Shape
{
    /**
     * @param array{
     *     input?: string|null,
     *     afterArguments?: string|null,
     *     afterInputPath?: string|null,
     *     afterParameters?: string|null,
     *     result?: string|null,
     *     afterResultSelector?: string|null,
     *     afterResultPath?: string|null,
     *     request?: InspectionDataRequest|null,
     *     response?: InspectionDataResponse|null,
     *     variables?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
