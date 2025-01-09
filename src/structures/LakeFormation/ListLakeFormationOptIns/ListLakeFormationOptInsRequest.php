<?php

namespace Sunaoka\Aws\Structures\LakeFormation\ListLakeFormationOptIns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DataLakePrincipal $Principal
 * @property Shapes\Resource $Resource
 * @property int<1, 1000> $MaxResults
 * @property string $NextToken
 */
class ListLakeFormationOptInsRequest extends Request
{
    /**
     * @param array{
     *     Principal?: Shapes\DataLakePrincipal,
     *     Resource?: Shapes\Resource,
     *     MaxResults?: int<1, 1000>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
