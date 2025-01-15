<?php

namespace Sunaoka\Aws\Structures\DynamoDb\EnableKinesisStreamingDestination;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TableName
 * @property string $StreamArn
 * @property Shapes\EnableKinesisStreamingConfiguration|null $EnableKinesisStreamingConfiguration
 */
class EnableKinesisStreamingDestinationRequest extends Request
{
    /**
     * @param array{
     *     TableName: string,
     *     StreamArn: string,
     *     EnableKinesisStreamingConfiguration?: Shapes\EnableKinesisStreamingConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
