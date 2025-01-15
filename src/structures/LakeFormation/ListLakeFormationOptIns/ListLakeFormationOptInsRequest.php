<?php

namespace Sunaoka\Aws\Structures\LakeFormation\ListLakeFormationOptIns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DataLakePrincipal|null $Principal
 * @property Shapes\Resource|null $Resource
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 */
class ListLakeFormationOptInsRequest extends Request
{
    /**
     * @param array{
     *     Principal?: Shapes\DataLakePrincipal|null,
     *     Resource?: Shapes\Resource|null,
     *     MaxResults?: int<1, 1000>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
