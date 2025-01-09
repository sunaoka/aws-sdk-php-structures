<?php

namespace Sunaoka\Aws\Structures\LakeFormation\GetWorkUnits;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int $PageSize
 * @property string $QueryId
 */
class GetWorkUnitsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     PageSize?: int,
     *     QueryId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
