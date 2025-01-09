<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListModelMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ModelMetadataSearchExpression $SearchExpression
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 */
class ListModelMetadataRequest extends Request
{
    /**
     * @param array{
     *     SearchExpression?: Shapes\ModelMetadataSearchExpression,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
