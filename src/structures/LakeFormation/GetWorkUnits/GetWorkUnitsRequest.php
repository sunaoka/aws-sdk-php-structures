<?php

namespace Sunaoka\Aws\Structures\LakeFormation\GetWorkUnits;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int|null $PageSize
 * @property string $QueryId
 */
class GetWorkUnitsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     PageSize?: int|null,
     *     QueryId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
