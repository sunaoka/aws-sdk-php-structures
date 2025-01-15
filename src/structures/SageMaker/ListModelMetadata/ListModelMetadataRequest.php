<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListModelMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ModelMetadataSearchExpression|null $SearchExpression
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListModelMetadataRequest extends Request
{
    /**
     * @param array{
     *     SearchExpression?: Shapes\ModelMetadataSearchExpression|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
