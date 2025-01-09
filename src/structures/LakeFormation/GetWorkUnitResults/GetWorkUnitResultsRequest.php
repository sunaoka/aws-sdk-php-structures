<?php

namespace Sunaoka\Aws\Structures\LakeFormation\GetWorkUnitResults;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $QueryId
 * @property int<0, max> $WorkUnitId
 * @property string $WorkUnitToken
 */
class GetWorkUnitResultsRequest extends Request
{
    /**
     * @param array{
     *     QueryId: string,
     *     WorkUnitId: int<0, max>,
     *     WorkUnitToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
