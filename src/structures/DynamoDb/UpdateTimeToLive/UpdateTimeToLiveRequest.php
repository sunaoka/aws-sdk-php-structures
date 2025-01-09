<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateTimeToLive;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TableName
 * @property Shapes\TimeToLiveSpecification $TimeToLiveSpecification
 */
class UpdateTimeToLiveRequest extends Request
{
    /**
     * @param array{
     *     TableName: string,
     *     TimeToLiveSpecification: Shapes\TimeToLiveSpecification
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
