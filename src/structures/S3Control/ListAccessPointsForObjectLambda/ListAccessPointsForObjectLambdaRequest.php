<?php

namespace Sunaoka\Aws\Structures\S3Control\ListAccessPointsForObjectLambda;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListAccessPointsForObjectLambdaRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
