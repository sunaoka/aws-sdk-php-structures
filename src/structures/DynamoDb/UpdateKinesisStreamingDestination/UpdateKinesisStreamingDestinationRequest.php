<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateKinesisStreamingDestination;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TableName
 * @property string $StreamArn
 * @property Shapes\UpdateKinesisStreamingConfiguration $UpdateKinesisStreamingConfiguration
 */
class UpdateKinesisStreamingDestinationRequest extends Request
{
    /**
     * @param array{
     *     TableName: string,
     *     StreamArn: string,
     *     UpdateKinesisStreamingConfiguration?: Shapes\UpdateKinesisStreamingConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
