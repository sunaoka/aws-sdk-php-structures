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
 * @property InspectionErrorDetails|null $errorDetails
 * @property string|null $afterItemsPath
 * @property string|null $afterItemSelector
 * @property string|null $afterItemBatcher
 * @property string|null $afterItemsPointer
 * @property int<0, max>|null $toleratedFailureCount
 * @property float|null $toleratedFailurePercentage
 * @property int<0, max>|null $maxConcurrency
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
     *     variables?: string|null,
     *     errorDetails?: InspectionErrorDetails|null,
     *     afterItemsPath?: string|null,
     *     afterItemSelector?: string|null,
     *     afterItemBatcher?: string|null,
     *     afterItemsPointer?: string|null,
     *     toleratedFailureCount?: int<0, max>|null,
     *     toleratedFailurePercentage?: float|null,
     *     maxConcurrency?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
