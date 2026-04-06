<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateKinesisStreamingDestination;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TableName
 * @property string $StreamArn
 * @property Shapes\UpdateKinesisStreamingConfiguration|null $UpdateKinesisStreamingConfiguration
 */
class UpdateKinesisStreamingDestinationRequest extends Request
{
    /**
     * @param array{
     *     TableName: string,
     *     StreamArn: string,
     *     UpdateKinesisStreamingConfiguration?: Shapes\UpdateKinesisStreamingConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
